<?php
include ("chat/comment.class.php");
?>
	<div class="comment" style="display: block;">
		<div class="avatar">
			<img src="http://www.gravatar.com/avatar/7f67432502437249a1ef3e1574d086a4?size=50&amp;default=http%3A%2F%2Fdemo.tutorialzine.com%2F2010%2F06%2Fsimple-ajax-commenting-system%2Fimg%2Fdefault_avatar.gif">
		</div>
		<div class="name">dyegostan</div>
		<div class="date" title="Added at 14:40 on 29 Aug 2016">29 Aug 2016</div>
		<p>Exemplo de chat</p>
		</div>

<div id="addCommentContainer">
	<p>Comentar</p>
	<form id="addCommentForm" method="post" action="">
    	<div>
            <textarea name="body" id="body" cols="20" rows="5"></textarea>
           
            <input type="submit" id="submit" value="Enviar" />
        </div>
    </form>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="chat/script.js"></script>