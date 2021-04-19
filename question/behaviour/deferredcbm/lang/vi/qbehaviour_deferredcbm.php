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
 * Strings for component 'qbehaviour_deferredcbm', language 'en'.
 *
 * @package    qbehaviour
 * @subpackage deferredcbm
 * @copyright  2009 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['accuracy'] = 'Accuracy';
$string['accuracyandbonus'] = 'Accuracy + Bonus';
$string['assumingcertainty'] = 'You did not select a certainty. Assuming: {$a}.';
$string['averagecbmmark'] = 'Average CBM mark';
$string['basemark'] = 'Base mark {$a}';
$string['breakdownbycertainty'] = 'Break-down by certainty';
$string['cbmbonus'] = 'CBM bonus';
$string['cbmmark'] = 'CBM mark {$a}';
$string['cbmgradeexplanation'] = 'For CBM, the grade above is shown relative to the maximum for all correct at C=1.';
$string['cbmgrades'] = 'CBM grades';
$string['cbmgrades_help'] = 'With Certainty Based Marking (CBM) getting every question correct with C=1 (low certainty) gives a grade of 100%. Grades may be as high as 300% if every question is correct with C=3 (high certainty). Misconceptions (confident wrong responses) lower grades much more than wrong responses that are acknowledged to be uncertain. This may even lead to negative overall grades.

**Accuracy** is the % correct ignoring certainty but weighted for the maximum mark of each question. Successfully distinguishing more and less reliable responses gives a better grade than selecting the same certainty for each question. This is reflected in the **CBM Bonus**. **Accuracy** + **CBM Bonus** is a better measure of knowledge than **Accuracy**. Misconceptions can lead to a negative bonus, a warning to look carefully at what is and is not known.';

$string['accuracy'] = 'Độ chính xác';
$string['accuracyandbonus'] = 'Độ chính xác + Thưởng';
$string['assumingcertainty'] = 'Bạn đã không chọn một điều chắc chắn. Giả sử: {$a}. ';
$string['averagecbmmark'] = 'Điểm CBM trung bình';
$string['basemark'] = 'Dấu cơ sở {$a}';
$string['breakdownbycertainty'] = 'Phân tích một cách chắc chắn';
$string['cbmbonus'] = 'Phần thưởng CBM';
$string['cbmmark'] = 'Dấu CBM {$a}';
$string['cbmgradeexplanation'] = 'Đối với CBM, điểm ở trên được hiển thị so với mức tối đa cho tất cả các câu trả lời đúng tại C = 1.';
$string['cbmgrades'] = 'Điểm CBM';
$string['cbmgrades_help'] = 'Với Đánh dấu dựa trên độ chắc chắn (CBM), mọi câu hỏi đúng với C = 1 (độ chắc chắn thấp) sẽ cho điểm 100%. Điểm có thể cao tới 300% nếu mọi câu hỏi đều đúng với C = 3 (độ chắc chắn cao). Nhận thức sai (câu trả lời sai chắc chắn) sẽ cho điểm thấp hơn nhiều so với câu trả lời sai được thừa nhận là không chắc chắn. Điều này thậm chí có thể dẫn đến điểm tổng thể tiêu cực.

** Độ chính xác ** là% chính xác bỏ qua độ chắc chắn nhưng có trọng số cho điểm tối đa của mỗi câu hỏi. Việc phân biệt thành công các câu trả lời nhiều hơn và kém tin cậy hơn sẽ cho điểm cao hơn so với việc chọn cùng một độ chắc chắn cho mỗi câu hỏi. Điều này được phản ánh trong ** Tiền thưởng CBM **. ** Độ chính xác ** + ** Phần thưởng CBM ** là thước đo kiến ​​thức tốt hơn ** Độ chính xác **. Những quan niệm sai lầm có thể dẫn đến một khoản tiền thưởng tiêu cực, một lời cảnh báo để xem xét cẩn thận những gì được và chưa biết. ';

$string['cbmgrades_link'] = 'qbehaviour/deferredcbm/certaintygrade';
$string['certainty'] = 'Certainty';
$string['certainty_help'] = 'Certainty-based marking requires you to indicate how reliable you think your answer is. The available levels are:

Certainty level     | C=1 (Unsure) | C=2 (Mid) | C=3 (Quite sure)
------------------- | ------------ | --------- | ----------------
Mark if correct     |   1          |    2      |      3
Mark if wrong       |   0          |   -2      |     -6
Probability correct |  <67%        | 67-80%    |    >80%

Best marks are gained by acknowledging uncertainty. For example, if you think there is more than a 1 in 3 chance of being wrong, you should enter C=1 and avoid the risk of a negative mark.
';

$string['cbmgrades_link'] = 'qbehaviour/deferredcbm/suregrade';
$string['certainty'] = 'Độ chắc chắn';
$string['certainty_help'] = 'Việc đánh dấu dựa trên độ chắc chắn yêu cầu bạn cho biết mức độ tin cậy của câu trả lời của bạn. Các cấp độ có sẵn là:

Mức độ chắc chắn    | C=1 (Không chắc) | C=2 (Giữa) | C=3 (Khá chắc chắn)
------------------- | ------------ | --------- | ----------------
Đánh dấu nếu đúng   |   1          |    2      |      3
Đánh dấu nếu sai    |   0          |   -2      |     -6
Xác suất đúng       |  <67%        | 67-80%    |    >80%

Best marks are gained by acknowledging uncertainty. For example, if you think there is more than a 1 in 3 chance of being wrong, you should enter C=1 and avoid the risk of a negative mark.
';

$string['certainty_link'] = 'qbehaviour/deferredcbm/certainty';
$string['certainty-1'] = 'No Idea';
$string['certainty1'] = 'C=1 (Unsure: <67%)';
$string['certainty2'] = 'C=2 (Mid: >67%)';
$string['certainty3'] = 'C=3 (Quite sure: >80%)';
$string['certaintyshort-1'] = 'No Idea';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'No idea';
$string['foransweredquestions'] = 'Results for just the {$a} answered questions';
$string['forentirequiz'] = 'Results for the whole quiz ({$a} questions)';
$string['judgementok'] = 'OK';
$string['judgementsummary'] = 'Responses: {$a->responses}. Accuracy: {$a->fraction}. (Optimal range {$a->idealrangelow} to {$a->idealrangehigh}). You were {$a->judgement} using this certainty level.';
$string['howcertainareyou'] = 'Certainty{$a->help}: {$a->choices}';
$string['noquestions'] = 'No responses';
$string['overconfident'] = 'over-confident';
$string['pluginname'] = 'Deferred feedback with CBM';
$string['privacy:metadata'] = 'The Deferred feedback with CBM question behaviour plugin does not store any personal data.';
$string['slightlyoverconfident'] = 'a bit over-confident';
$string['slightlyunderconfident'] = 'a bit under-confident';
$string['underconfident'] = 'under-confident';
$string['weightx'] = 'Weight {$a}';

$string['sure_link'] = 'qbehaviour/deferredcbm/certainty';
$string['certainty-1'] = 'Không có ý tưởng';
$string['certainty1'] = 'C = 1 (Không chắc: <67%)';
$string['certainty2'] = 'C = 2 (Giữa:> 67%)';
$string['certainty3'] = 'C = 3 (Khá chắc chắn:> 80%)';
$string['certaintyshort-1'] = 'Không có ý tưởng';
$string['certaintyshort1'] = 'C = 1';
$string['certaintyshort2'] = 'C = 2';
$string['certaintyshort3'] = 'C = 3';
$string['dontknow'] = 'Không biết';
$string['foransweredquestions'] = 'Chỉ kết quả cho {$a} câu hỏi đã trả lời';
$string['forentirequiz'] = 'Kết quả cho toàn bộ bài kiểm tra ({$a} câu hỏi)';
$string['judgementok'] = 'Được';
$string['Judgementsummary'] = 'Câu trả lời: {$a->responses}. Độ chính xác: {$a->fraction}. (Phạm vi tối ưu {$a->Iderangelow} đến {$a->idealrangelow}). Bạn đã {$a->judgement} khi sử dụng mức độ chắc chắn này. ';
$string['howcertainareyou'] = 'Độ chắc chắn {$a->help}: {$a->choices}';
$string['noquestions'] = 'Không có câu trả lời';
$string['overconfident'] = 'quá tự tin';
$string['pluginname'] = 'Phản hồi bị trì hoãn với CBM';
$string['privacy: metadata'] = 'Phản hồi Trì hoãn với plugin hành vi câu hỏi CBM không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['littleoverconfident'] = 'hơi quá tự tin';
$string['littleunderconfident'] = 'hơi thiếu tự tin';
$string['underconfident'] = 'kém tự tin';
$string['weightx'] = 'Trọng lượng {$a}';