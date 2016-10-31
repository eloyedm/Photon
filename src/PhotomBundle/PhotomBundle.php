<?php

namespace PhotomBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PhotomBundle extends Bundle
{
  public function getParent()
  {
      return 'FOSUserBundle';
  }
}
