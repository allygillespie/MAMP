<?php include_once '../php/functions.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>MAMP</title>
		<link rel="stylesheet" type="text/css" href="../css/screen.css" />
	</head>
	<body>
		<div id="contentWrap">
			<div id="content">
				<div class="column1">
					<div class="frame">
						<h1>FAQ</h1>
						<dl>
							<dt>Программы каких версий установлены?</dt>
							<dd><ul><li>Apache 2.0.64</li><li>MySQL 5.5.9</li><li>PHP 5.2.17 &amp; 5.3.5</li><li>APC 3.1.7</li><li>eAccelerator 0.9.6.1</li><li>XCache 1.2.2 &amp; 1.3.1</li><li>phpMyAdmin 3.3.9.2</li><li>Zend Optimizer 3.3.9</li><li>SQLiteManager 1.2.4</li><li>Freetype 2.4.4</li><li>t1lib 5.1.2</li><li>curl 7.21.3</li><li>jpeg 8c</li><li>libpng-1.5.0</li><li>gd 2.0.34</li><li>libxml 2.7.6</li><li>libxslt 1.1.26</li><li>gettext 0.18.1.1</li><li>libidn 1.17</li><li>iconv 1.13</li><li>mcrypt 2.5.8</li><li>YAZ 4.0.1 &amp; PHP/YAZ 1.0.14</li></ul></dd>
							<dt>Как можно изменить мой пароль базы данных MySQL?</dt>
							<dd>Откройте терминал и задайте следующее:<br /><br /><code>/Applications/MAMP/Library/bin/mysqladmin -u root -p password &lt;НОВЫЙ ПАРОЛЬ&gt;</code><br /><br />вместо<code style="left: 0pt;"> &lt;НОВЫЙ ПАРОЛЬ&gt;</code> вводится нужный пароль.<br />Примите во внимание, что после этого также необходимо изменить пароль для phpMyAdmin и других скриптов, относящихся к MAMP. Пароль для phpMyAdmin можно изменить в файле /Applications/MAMP/bin/phpMyAdmin-X.X.X/config.inc.php.</dd>
							<dt>Где можно изменить порты для Apache и MySQL?</dt>
							<dd>Возможность изменения портов предоставляется в настройках программы MAMP:<br/><br/><img src="images/ports.gif" alt="" /></dd>
							<dt>Куда я должен сохранять мои страницы PHP и HTML?</dt>
							<dd>Настройка по умолчанию предусматривает сохранение страниц PHP и HTML в папке htdocs, расположенной в папке /Programme/MAMP. Данная папка иначе называется &quot;Document Root&quot;. Путь Dokument Root можно изменить в любой момент в настройках программы MAMP:<br/><br/><img src="images/documentRoot.gif" alt="" /></dd>
							<dt>Почему появляется окно ввода пароля как при запуске, так и при выходе из программы MAMP?</dt>
							<dd>Вероятно, задан порт Apache менее, чем 1024. В системе Unix, такой как Mac OS X, для того, чтобы воспользоваться услугами провайдера с портами менее 1024, требуются права root.</dd>
						</dl>
					</div>
				</div>
				<div class="column2">
					<?php
						echo show_content($language, 'ad', 1);
						echo '<h2>Updates</h2>';
						echo show_content($language, 'news', 2);
						echo '<h2>News</h2>';
						echo show_content($language, 'news', 1);
					?>
				</div>
				<div class="cb"></div>
			</div>
		</div>
	</body>
</html>