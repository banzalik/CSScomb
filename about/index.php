<?
$title['en'] = $h1['en'] = 'About';
$title['ru'] = $h1['ru'] = 'О проекте';
$module = 'about';
require_once'../common/header.php';

if($lang=='ru'){
?>

        <h2>Как работает CSScomb?</h2>
		<p>Алгоритм CSScomb максимально повторяет действия веб-технолога работающего с CSS-кодом.
		   Для пересортировки обычно перемещают строки относительно друг друга учитывая комметарии в коде, многострочные записи значений свойств, хаки и всё,
		   что может встретиться в реальном файле. CSScomb воспроизводит такие действия за вас.
		   Это означает, что парсер по своей природе «думает» как человек редактирующий текст, а не как слепой робот разбирающий CSS по косточкам.</p>

		<h2>Что умеет CSScomb?</h2>
		<ul>
			<li>Сортирует CSS-свойства в&nbsp;рамках селекторов в&nbsp;соответствии с&nbsp;настройками.</li>
			<li>Бережно относиться к исходному форматированию таблицы стилей.</li>
			<li>Сортирует закомментированные свойства так как если бы они не были закомментированы.</li>
			<li>Переносит вниз незнакомые свойства в том порядке, в&nbsp;котором они встречаются в&nbsp;рамках селектора. Например: <code>he\ight:&nbsp;100%</code> и&nbsp;подобные будут рассмотрены как&nbsp;незнакомые.</li>
			<li>Успешно парсит <code>@media&nbsp;...&nbsp;{...}</code> и любые другие конструкции с <code>@</code>.</li>
			<li>Успешно парсят <code>expressions</code> и&nbsp;далее переносятся в&nbsp;конец свойств в&nbsp;порядке, в&nbsp;котором они встретились в&nbsp;рамках свойств одного селектора.</li>
		</ul>

		<h2>Как настраивать порядок сортировки?</h2>
		<p>В веб интерфейсе настройки можно задать простым списком: каждое свойство с новой строки, в нужном порядке. При желании можно разделить свойства на группы пустой строкой, тогда резутат форматирования будет выглядить так же.</p>
        <p>Для настроек плагинов используется одноменный или двумерный JSON-массив. В случае двумерного массива свойства будут разделены на группы пустой строкой. В плагинах нужно расковырять файлик <code>csscomb.php</code></p>
        <ul>
            <li>В TextMate: <code>/Applications/TextMate.app/Contents/SharedSupport/Bundles/CSS.tmbundle/Support/lib/csscomb.php</code></li>
            <li>В Coda: <code>/Users/%YOUR_USER_NAME%/Library/Application Support/Coda/Plug-ins/CSScomb.codaplugin/Contents/Resources/csscomb.php</code></li>
        </ul>

		<h2>Как помочь проекту?</h2>
		<p>Сделать плагин (если такового нет) к вашему любимому редактору.</p>

		<h2>Планы</h2>
		<p>Совершенствование алгоритма и доработки по тест-кейсам, которые падают.</p>
		<p>Внедрение CSScomb в популярные редакторы кода.</p>

        <h2>Благодарности</h2>
        <p>Александр Титула-Бойченко, Вадим Макеев, Игорь Майданов, Олег Васютинский, всем кто помогал тестировать.</p>
<?
}
else{
    echo '<p>Soon...</p>';
}

require_once'../common/footer.php';
?>