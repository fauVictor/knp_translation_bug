<?php

namespace App\Entity;

use App\Repository\PdfRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PdfRepository::class)]
class Pdf extends File
{
    #[ORM\Column(type: 'string', length: 255)]
    private string $pdf_foo;

    public function getPdfFoo(): ?string
    {
        return $this->pdf_foo;
    }

    public function setPdfFoo(string $pdf_foo): self
    {
        $this->pdf_foo = $pdf_foo;

        return $this;
    }
}
