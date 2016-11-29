<?php $comments = new Comments($page); ?>
<?php $status = $comments->process(); ?>

<?php if (!$comments->isEmpty()): ?>
  <h2>Comments</h2>

  <?php foreach ($comments as $comment): ?>
    <article id="comment-<?php echo $comment->id() ?>" class="comment<?php e($comment->isPreview(), ' preview"') ?>">
      <div class="comment-title">
        <h3><?php echo $comment->name() ?></h3>
        <div class="comment-info">
          <?php if ($comment->isPreview()): ?>
          <?php else: ?>
              Posted on <?php echo $comment->date('Y-m-d') ?>.
              <a href="#comment-<?php echo $comment->id() ?>">#</a>
          <?php endif ?>
        </div>
      </div>

      <?php echo $comment->message() ?>

      <?php if ($comment->isPreview()): ?>
        <p class="comment-preview-message">This is a preview of your feedback. If you’re happy with it, <a href="#submit">submit</a> it to the public.</p>
      <?php endif ?>

    </article>
  <?php endforeach ?>
<?php endif ?>

<?php if ($comments->userHasSubmitted()): ?>
  <p class="thank-you">Thank you for your feedback!</p>
<?php else: ?>
  <div class="new-comment-wrapper">
    <p class="new-comment-title">What's your opinion?</p>

    <?php if ($status->isUserError()): ?>
      <p id="comment-<?php echo $comments->nextCommentId() ?>" class="error">
        <?php echo $status->getMessage() ?>
      </p>
    <?php endif ?>

    <form action="#comment-<?php echo $comments->nextCommentId() ?>" method="post" accept-charset="utf-8">
      <label for="name">Name<abbr title="required">*</abbr></label>
      <input type="text" name="name" value="<?php echo $comments->value('name') ?>" id="name" maxlength="<?php echo $comments->fieldMaxlength() ?>" required>

      <label for="message">Message<abbr title="required">*</abbr></label>
      <textarea name="message" id="message" maxlength="<?php echo $comments->messageMaxlength() ?>" required><?php echo $comments->value('message') ?></textarea>

      <input type="hidden" name="<?php echo $comments->sessionIdName() ?>" value="<?php echo $comments->sessionId() ?>">

      <input type="submit" name="<?php echo $comments->previewName() ?>" value="Preview">
      <?php if ($comments->validPreview()): ?>
        <input type="submit" name="<?php echo $comments->submitName() ?>" value="Submit" id="submit">
      <?php endif ?>
    </form>
  </div>
<?php endif ?>
