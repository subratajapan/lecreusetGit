<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Emails.html
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
Mr/Ms,<?= $value['Contact']['name']; ?><br>
Thank you very much for contact with us.<br>
We will feedback as soon as possible<br>
------------------------------------------------<br>
Name:<?= $value['Contact']['name']; ?><br>
Last Name:<?= $value['Contact']['lastname']; ?><br>
Organization:<?= $value['Contact']['organization']; ?><br>
Email:<?= $value['Contact']['email']; ?><br>
Reason:<?= $value['Contact']['reason']; ?><br>

<?php if (isset($value['Contact']['reason_other'])): ?>
	Reason other:<?= $value['Contact']['reason_other']; ?><br>
<?php endif ?>
Content:<?= $value['Contact']['content']; ?><br>
------------------------------------------------<br>
Le Creuset Japon KK.<br>
東京本社	〒106-0041　東京都港区麻布台2丁目2番9号<br>
TEL：（代表）03-3585-0197<br>
TEL：（カスタマーダイヤル）03-3585-0198<br>
FAX：03-3582-1088<br>
関西支社	〒530-0012　大阪府大阪市北区芝田2-7-18 オーエックス梅田ビル新館8F<br>
TEL：（代表）06-6371-8484<br>
TEL：（カスタマーダイヤル）03-3585-0198<br>
FAX：06-6371-8077<br>
URL: http://www.lecreuset.co.jp

