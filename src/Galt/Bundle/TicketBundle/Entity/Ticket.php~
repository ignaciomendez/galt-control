<?php
namespace Galt\Bundle\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Ticket
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity="Galt\Bundle\MainBundle\Entity\Person", inversedBy="authored")
     */
    private $author;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Galt\Bundle\MainBundle\Entity\Person", inversedBy="tickets")
     */
    private $assigned;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->persons = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set persons
     *
     * @param \Galt\Bundle\MainBundle\Entity\Person $persons
     * @return Ticket
     */
    public function setPersons(\Galt\Bundle\MainBundle\Entity\Person $persons = null)
    {
        $this->persons = $persons;

        return $this;
    }

    /**
     * Get persons
     *
     * @return \Galt\Bundle\MainBundle\Entity\Person 
     */
    public function getPersons()
    {
        return $this->persons;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Ticket
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Ticket
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Ticket
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set author
     *
     * @param \Galt\Bundle\MainBundle\Entity\Person $author
     * @return Ticket
     */
    public function setAuthor(\Galt\Bundle\MainBundle\Entity\Person $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \Galt\Bundle\MainBundle\Entity\Person 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set assigned
     *
     * @param \Galt\Bundle\MainBundle\Entity\Person $assigned
     * @return Ticket
     */
    public function setAssigned(\Galt\Bundle\MainBundle\Entity\Person $assigned = null)
    {
        $this->assigned = $assigned;

        return $this;
    }

    /**
     * Get assigned
     *
     * @return \Galt\Bundle\MainBundle\Entity\Person 
     */
    public function getAssigned()
    {
        return $this->assigned;
    }
}
