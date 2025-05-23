<?php

if (!defined('ABSPATH')) die('Access denied.');

if (!class_exists('Updraft_Task_1_1')) require_once(WPO_PLUGIN_MAIN_PATH . 'vendor/team-updraft/common-libs/src/updraft-tasks/class-updraft-task.php');

if (!class_exists('WP_Optimize_Images_Trash_Task')) :

class WP_Optimize_Images_Trash_Task extends Updraft_Task_1_1 {

	/**
	 * Runs the task
	 *
	 * @return bool - true if complete, false otherwise
	 */
	public function run() {

		$this->set_status('active');

		// move to trash task.
		if ('move_image_to_trash' == $this->get_type()) {
			$image_id = $this->get_option('image_id');
			$file = $this->get_option('file');
			$blog_id = $this->get_option('blog_id');

			$result = WP_Optimize_Images_Trash_Manager::instance()->move_image_to_trash($image_id, $file, $blog_id);

			if (!is_wp_error($result)) {
				$success_count = WP_Optimize_Images_Trash_Manager::instance()->get_stat_value('move_image_to_trash_success', 0) + 1;
				WP_Optimize_Images_Trash_Manager::instance()->update_stat_value('move_image_to_trash_success', $success_count);
			} else {
				$failure_count = WP_Optimize_Images_Trash_Manager::instance()->get_stat_value('move_image_to_trash_failure', 0) + 1;
				WP_Optimize_Images_Trash_Manager::instance()->update_stat_value('move_image_to_trash_failure', $failure_count);
			}
		}

		// restore from trash task.
		if ('restore_image_from_trash' == $this->get_type()) {
			$filename = $this->get_option('file');

			$result = WP_Optimize_Images_Trash_Manager::instance()->restore_from_trash($filename);

			if (!is_wp_error($result)) {
				$success_count = WP_Optimize_Images_Trash_Manager::instance()->get_stat_value('restore_image_from_trash_success', 0) + 1;
				WP_Optimize_Images_Trash_Manager::instance()->update_stat_value('restore_image_from_trash_success', $success_count);
			} else {
				$failure_count = WP_Optimize_Images_Trash_Manager::instance()->get_stat_value('restore_image_from_trash_failure', 0) + 1;
				WP_Optimize_Images_Trash_Manager::instance()->update_stat_value('restore_image_from_trash_failure', $failure_count);
			}
		}

		return true;
	}
}
endif;
