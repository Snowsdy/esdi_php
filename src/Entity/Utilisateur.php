<?php

/**
 * Classe qui défini un utilisateur.
 */
class Utilisateur
{
    /**
     * Identifiant de l'utilisateur.
     *
     * @var integer
     */
    private int $id;

    /**
     * Nom de l'utilisateur.
     *
     * @var string
     */
    private string $nom;

    /**
     * Email de l'utilisateur.
     *
     * @var string
     */
    private string $email;

    /**
     * Mot de passe de l'utilisateur.
     *
     * @var string
     */
    private string $motDePasse;

    /**
     * Date d'inscription de l'utilisateur.
     *
     * @var DateTime
     */
    private DateTime $dateInscription;

    /**
     * Function permettant la création d'une instance de la classe Utilisateur.
     *
     * @param integer|null $id
     * @param string $nom
     * @param string $email
     * @param string $motDePasse
     * @param DateTime $dateInscription
     */
    public function __construct(int $id = null, string $nom, string $email, string $motDePasse, DateTime $dateInscription)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
        $this->motDePasse = $motDePasse;
        $this->dateInscription = $dateInscription;
    }

    /**
     * Function qui retourne un booléen sur la vérification du mot de passe.
     *
     * @param string $motDePasse
     * @return boolean
     */
    public function verifierMotDePasse(string $motDePasse): bool
    {
        return $this->motDePasse == $motDePasse;
    }

    /**
     * Function permettant de mettre à jour le profil de l'utilisateur après vérification du mot de passe.
     *
     * @param string $nom
     * @param string $email
     * @param string $motDePasse
     * @return void
     */
    public function mettreAJourProfil(string $nom, string $email, string $motDePasse): void
    {
        if ($this->verifierMotDePasse($motDePasse)) {
            $this->nom = $nom;
            $this->email = $email;
        }
    }

    /**
     * Retourne l'identifiant de l'utilisateur.
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Retourne le nom de l'utilisateur.
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Retourne l'adresse mail du l'utilisateur.
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Retourne le mot de passe de l'utilisateur.
     *
     * @return string
     */
    public function getMotDePasse(): string
    {
        return $this->motDePasse;
    }

    /**
     * Retourne la date d'inscription de l'utilisateur.
     *
     * @return DateTime
     */
    public function getDateInscription(): DateTime
    {
        return $this->dateInscription;
    }

    /**
     * Attribue un nouvel identifiant à l'utilisateur.
     *
     * @param integer $id
     * @return void
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Attribue un nouveau nom à l'utilisateur.
     *
     * @param string $nom
     * @return void
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * Attribue un nouvel email à l'utilisateur.
     *
     * @param string $email
     * @return void
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Attribue un nouveau mot de passe à l'utilisateur.
     *
     * @param string $motDePasse
     * @return void
     */
    public function setMotDePasse(string $motDePasse): void
    {
        $this->motDePasse = $motDePasse;
    }

    /**
     * Attribue une nouvelle date d'inscription à l'utilisateur.
     *
     * @param DateTime $dateInscription
     * @return void
     */
    public function setDateInscription(DateTime $dateInscription): void
    {
        $this->dateInscription = $dateInscription;
    }
}
