<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'qbehaviour_adaptive', language 'en'.
 *
 * @package    qbehaviour
 * @subpackage adaptive
 * @copyright  2009 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['disregedwithoutpenalty'] = 'Bài gửi không hợp lệ và đã được bỏ qua mà không bị phạt.';
$string['gradingdetails'] = 'Điểm cho bài nộp này: {$a->raw} / {$a->max}.';
$string['gradingdetailswithadjustment'] = 'Điểm cho bài nộp này: {$a->raw} / {$a->max}. Tính toán cho các lần thử trước, điều này mang lại <strong> {$a->cur} / {$a->max} </strong>. ';
$string['gradingdetailswithadjustmentpenalty'] = 'Điểm cho bài nộp này: {$a->raw} / {$a->max}. Tính cho các lần thử trước, điều này mang lại <strong> {$a->cur} / {$a->max} </strong>. Bài nộp này bị phạt {$a->penalty}. ';
$string['gradingdetailswithadjustmenttotalpenalty'] = 'Điểm cho bài nộp này: {$a->raw} / {$a->max}. Tính cho các lần thử trước, điều này mang lại <strong> {$a->cur} / {$a->max} </strong>. Nội dung gửi này đã bị phạt {$a->penalty}. Tổng số hình phạt cho đến nay: {$a->totalpenalty}. ';
$string['gradingdetailswithpenalty'] = 'Điểm cho bài nộp này: {$a->raw} / {$a->max}. Bài nộp này bị phạt {$a->penalty}. ';
$string['gradingdetailswithtotalpenalty'] = 'Điểm cho bài nộp này: {$a->raw} / {$a->max}. Nội dung gửi này bị phạt {$a->penalty}. Tổng số hình phạt cho đến nay: {$a->totalpenalty}. ';
$string['notcomplete'] = 'Chưa hoàn thành';
$string['pluginname'] = 'Chế độ thích ứng';
$string['privacy: metadata'] = 'Plugin hành vi câu hỏi Chế độ thích ứng không lưu trữ bất kỳ dữ liệu cá nhân nào.';

// Các chuỗi cũ, những chuỗi này hiện chỉ được sử dụng trong các bài kiểm tra đơn vị, để xác minh rằng chuỗi mới
// các chuỗi cho kết quả tương tự như các chuỗi cũ.
$string['gradingdetailsadjustment'] = 'Tính cho các lần thử trước, điều này mang lại cho <strong> {$a->cur} / {$a->max} </strong>.';
$string['gradingdetailspenalty'] = 'Bài nộp này bị phạt {$a}.';
$string['gradingdetailspenaltytotal'] = 'Tổng số hình phạt cho đến nay: {$a}.';
