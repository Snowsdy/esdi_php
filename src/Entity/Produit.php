<?php

/**
 * Classe qui définit un produit.
 */
class Produit
{
    /**
     * Identifiant du produit.
     *
     * @var integer
     */
    private int $id;

    /**
     * Nom du produit.
     *
     * @var string
     */
    private string $nom;

    /**
     * Description du produit.
     *
     * @var string
     */
    private string $description;

    /**
     * Prix (HT) du produit.
     *
     * @var float
     */
    private float $prix;

    /**
     * Stock du produit.
     *
     * @var integer
     */
    private int $stock;

    /**
     * Function permettant la création d'une instance de la classe Produit.
     *
     * @param integer|null $id
     * @param string $nom
     * @param string $description
     * @param float $prix
     * @param integer $stock
     */
    public function __construct(int $id = null, string $nom, string $description, float $prix, int $stock)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->$description = $description;
        $this->prix = $prix;
        $this->stock = $stock;
    }

    /**
     * Function qui retourne le prix toute taxe comprise du produit.
     *
     * @return float
     */
    public function calculerPrixTTC(): float
    {
        return $this->prix + ($this->prix * 0.2);
    }

    /**
     * Function qui retourne un booléen indiquant si le nombre passé en paramètre est inférieur ou égal au stock du produit.
     *
     * @param integer $quantite
     * @return boolean
     */
    public function verifierStock(int $quantite): bool
    {
        return $quantite <= $this->stock;
    }

    /**
     * Retour l'identifiant du produit.
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Retourne le nom du produit.
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Retourne la description du produit.
     *
     * @return integer
     */
    public function getDescription(): int
    {
        return $this->description;
    }

    /**
     * Retourne le prix du produit.
     *
     * @return integer
     */
    public function getPrix(): int
    {
        return $this->prix;
    }

    /**
     * Retourne le stock du produit.
     *
     * @return integer
     */
    public function getStock(): int
    {
        return $this->stock;
    }

    /**
     * Attribue un nouvel identifiant du produit.
     *
     * @param integer $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Attribue un nouveau nom au produit.
     *
     * @param string $nom
     * @return void
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    /**
     * Attribue une nouvelle description au produit.
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Attribue un nouveau prix au produit.
     *
     * @param float $prix
     * @return void
     */
    public function setPrix(float $prix)
    {
        $this->prix = $prix;
    }

    /**
     * Attribue un nouveau stock au produit.
     *
     * @param integer $stock
     * @return void
     */
    public function setStock(int $stock)
    {
        $this->stock = $stock;
    }
}
