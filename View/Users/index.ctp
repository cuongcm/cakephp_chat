
<?php 
//pr($thread_other);
echo '<h2><a href='.$this->webroot.'threads/create>Create new chat threads</a></h2>';
echo "<h2>Your owned chat threads:</h2>";
foreach ($thread_owned as $thread) {
	//pr($thread);
	echo "<h4>".$thread['threadname']."</h4>";
}
echo "<h2>Other owned chat thread:</h2>";
foreach ($thread_other as $thread) {
//	echo "<h4>".$thread['threadname']."</h4>";
}
?>