<?php

namespace Volvo\SecurityBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class VolvoSecurityBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
