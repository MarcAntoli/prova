<?php include_partial('global/provaPartial', array('total' => $total)); ?>
<div class="veure">
  <p>Hola, mundo !!!</p>
  <?php echo $hora ?>
  <?php if ($hora >= 15): ?>
    <p>Quizás debería decir buenas tardes. Ya son las <?php echo $hora ?>.</p>
  <?php endif; ?>
</div>
