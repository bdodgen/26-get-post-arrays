Here is the form.

<!-- In the form file open and close a <form> element.

The form will be sent to the same page that it appears on and it's method will be post -->

<form action="" method="post">
  <?php foreach($items as $i => $text) : ?>
  <input type="text" name="items[<?=$i?>]" value= <?=(string)($text)?> >
  <?php endforeach ?>

  <input type="text" name="items[0]" value="">

  <button type="submit">Add</button>

</form>

htmlspecialchars((string)$song->name)