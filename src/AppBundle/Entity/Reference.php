<?php
/*
  ÁTICA - Aplicación web para la gestión documental de centros educativos

  Copyright (C) 2015-2017: Luis Ramón López López

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU Affero General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU Affero General Public License for more details.

  You should have received a copy of the GNU Affero General Public License
  along with this program.  If not, see [http://www.gnu.org/licenses/].
*/

namespace AppBundle\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Reference
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Element", inversedBy="references")
     * @var Element
     */
    private $source;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Element")
     * @var Element
     */
    private $target;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $multiple;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $mandatory;
}