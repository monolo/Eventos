<?php
namespace Jet\EventsBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="Photo")
 * @ORM\Entity
 */
class Photo
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
     * @var text $description
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var datetime $createdAt
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var datetime $tokenAt
     *
     * @ORM\Column(name="token_at", type="datetime", nullable=false)
     */
    private $tokenAt;

    /**
     * @var Event
     *
     * ORM\@ManyToOne(targetEntity="Event")
     * ORM\@JoinColumns({
     *   ORM\@JoinColumn(name="event_id", referencedColumnName="id")
     * })
     */
    private $event;


}