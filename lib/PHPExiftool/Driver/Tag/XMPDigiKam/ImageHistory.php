<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPDigiKam;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ImageHistory extends AbstractTag
{

    protected $Id = 'ImageHistory';

    protected $Name = 'ImageHistory';

    protected $FullName = 'XMP::digiKam';

    protected $GroupName = 'XMP-digiKam';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-digiKam';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Image History';

    protected $flag_Avoid = true;

}
