<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Audible;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class CoverArtType extends AbstractTag
{

    protected $Id = 'CoverArtType';

    protected $Name = 'CoverArtType';

    protected $FullName = 'Audible::cvrx';

    protected $GroupName = 'Audible';

    protected $g0 = 'QuickTime';

    protected $g1 = 'Audible';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Cover Art Type';

}
