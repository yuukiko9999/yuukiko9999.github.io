<html>
	<head>
		<meta charset="utf-8" />
		<title>the works project</title>
	  <link rel="stylesheet" href="./css/style_form.css">
	</head>
	<body>
		<?php
			mb_language("Japanese");
			mb_internal_encoding("UTF-8");

			$to = "yuukiko9999@gmail.com";
			$mailTitle = "お問い合わせ";

			//件名
			$formTitle = $_POST['件名'];
			//お問い合わせ内容
			$contents = $_POST['お問い合わせ内容'];
			//貴社名
			$company = $_POST['貴社名'];
			//姓
			$lastName = $_POST['姓'];
			//名
			$firstName = $_POST['名'];
			//セイ
			$lastName_furi = $_POST['セイ'];
			//メイ
			$firstName_furi = $_POST['メイ'];
			//郵便番号
			$postCode = $_POST['郵便番号'];
			//都道府県
			$prefectures = $_POST['都道府県'];
			//ご住所
			$address = $_POST['ご住所'];
			//電話番号
			$tell = $_POST['電話番号'];
			//メールアドレス
			$email = $_POST['メールアドレス'];

			//==== メール送信処理 ====
			if (0) {
			$sent_result = mb_send_mail(
				$to,
				$mailTitle,
				"件名：\r\n".
				$formTitle."\r\n\r\n".

				"お問い合わせ内容：\r\n".
				$contents."\r\n\r\n".

				"貴社名：\r\n".
				$company."\r\n\r\n".

				"お名前：\r\n".
				$lastName." ".$firstName.
				"(".$lastName_furi." ".$firstName_furi.")\r\n\r\n".

				"郵便番号：\r\n".
				$postCode."\r\n\r\n".

				"都道府県：\r\n".
				$prefectures."\r\n\r\n".

				"ご住所：\r\n".
				$address."\r\n\r\n".

				"電話番号：\r\n".
				$tell."\r\n\r\n".

				"メールアドレス：\r\n".
				$email."\r\n\r\n"
			);
			}

			// if($sent_result) {
			// 	echo "メールを送信しました";
			// } else {
			// 	echo "メールの送信に失敗しました";
			// }
		?>

		<div class="top-wrapper">
		  <img class="logo-image" src="./img/logo1.jpg">
		  <div class="page-title">
		    <h1>CONTACT</h1>
		    <p>お問い合わせ</p>
		  </div>
		  <div class="sent-page-text">
		    <p>お問い合わせいただきありがとうございます。</p>
				<p>担当者より返信があるまでしばらくお待ちくださいませ。</p>
		  </div> <!-- form-page-text -->
		</div> <!-- top-wrapper -->

		<div class="submitBtn-wrapper">
      <a href="index.html">トップページへ戻る</a>
    </div>

	</body>
</html>
