<?php
namespace Jet\CoreBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Place
 *
 * @ORM\Table(name="Place")
 * @ORM\Entity
 */
class Place
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var float $latitude
     *
     * @ORM\Column(name="latitude", type="float", nullable=false)
     */
    private $latitude;

    /**
     * @var float $longitude
     *
     * @ORM\Column(name="longitude", type="float", nullable=false)
     */
    private $longitude;


}