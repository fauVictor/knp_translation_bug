<?php

namespace App\Entity;

use App\Repository\FileTranslationRepository;
use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Contract\Entity\TranslationInterface;
use Knp\DoctrineBehaviors\Model\Translatable\TranslationTrait;

#[ORM\Entity]
#[ORM\Table('file_translation')]
#[ORM\InheritanceType('JOINED')]
#[ORM\DiscriminatorColumn(name: 'type', type: 'string', length: 255)]
#[ORM\DiscriminatorMap([
	'pdf' => PdfTranslation::class,
	'video' => VideoTranslation::class
])]
class FileTranslation implements TranslationInterface
{
	use TranslationTrait;
	
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private string $foo;

    #[ORM\Column(type: 'string', length: 255)]
    private string $bar;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFoo(): ?string
    {
        return $this->foo;
    }

    public function setFoo(string $foo): self
    {
        $this->foo = $foo;

        return $this;
    }

    public function getBar(): ?string
    {
        return $this->bar;
    }

    public function setBar(string $bar): self
    {
        $this->bar = $bar;

        return $this;
    }
}
