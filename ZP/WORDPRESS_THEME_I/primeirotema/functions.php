<?php
echo 'Me carregou';

// action hooks
function nv_fim()
{
  echo 'Vai encerrar tudo...';
}
add_action('shutdown', 'nv_fim');
