<?php

class beneficiaire {

    
    private $id_beneficiaire;
    private $id_boite_a_outils;
    private $id_module;
    private $id_situation_familiale;
    private $id_niveau_d_etudes;
    private $nom_beneficiaire;
    private $prenom_beneficiaire;
    private $adresse_beneficiaire;
    private $cp_beneficiaire;
    private $ville_beneficiaire;
    private $_departement;
    private $telephone_beneficiaire;
    private $email_beneficiaire;
    private $date_naissance_beneficiaire;
    private $sexe;
    private $metier;
    private $specialite;
    private $nombre_d_enfants;
    private $derniere_connexion;
    private $chomage;
    private $depuis;
   
    function __construct($idBeneficiaire = null, $idBoiteAOutils = null, $idModule = null, $idSituationFamiliale = null, $idNiveauDEtudes = null, $nomBeneficiaire = null, $prenomBeneficiaire = null, $adresseBeneficiaire = null, $cpBeneficiaire = null, $villeBeneficiaire = null,$_departement=null, $telephoneBeneficiaire = null, $emailBeneficiaire = null,$dateNaissanceBeneficiaire = null,$_sexe=null,$_specialite=null, $_metier=null, $nombreDEnfants=null, $derniereConnexion=null, $_chomage=null, $_depuis=null) {
        $this->id_beneficiaire = $idBeneficiaire;
        $this->id_boite_a_outils=$idBoiteAOutils;
        $this->id_module = $idModule;
        $this->id_situation_familiale = $idSituationFamiliale;
        $this->id_niveau_d_etudes = $idNiveauDEtudes;
        $this->nom_beneficiaire = $nomBeneficiaire;
        $this->prenom_beneficiaire = $prenomBeneficiaire;
        $this->adresse_beneficiaire = $adresseBeneficiaire;
        $this->cp_beneficiaire = $cpBeneficiaire;
        $this->ville_beneficiaire = $villeBeneficiaire;
        $this->departement = $_departement;
        $this->telephone_beneficiaire = $telephoneBeneficiaire;
         $this->email_beneficiaire = $emailBeneficiaire;
        $this->date_naissance_beneficiaire = $dateNaissanceBeneficiaire;
        $this->sexe=$_sexe;
        $this->metier=$_metier;
        $this->specialite=$_specialite;
        $this->nombre_d_enfants=$nombreDEnfants;
        $this->derniere_connexion=$derniereConnexion;
        $this->chomage=$_chomage;
        $this->depuis=$_depuis;     
         
    }
    public function getId_beneficiaire() {
        return $this->id_beneficiaire;
    }

    public function getId_boite_a_outils() {
        return $this->id_boite_a_outils;
    }

    public function getId_module() {
        return $this->id_module;
    }

    public function getId_situation_familiale() {
        return $this->id_situation_familiale;
    }

    public function getId_niveau_d_etudes() {
        return $this->id_niveau_d_etudes;
    }

    public function getNom_beneficiaire() {
        return $this->nom_beneficiaire;
    }

    public function getPrenom_beneficiaire() {
        return $this->prenom_beneficiaire;
    }

    public function getAdresse_beneficiaire() {
        return $this->adresse_beneficiaire;
    }

    public function getCp_beneficiaire() {
        return $this->cp_beneficiaire;
    }

    public function getVille_beneficiaire() {
        return $this->ville_beneficiaire;
    }

    public function getDepartement() {
        return $this->_departement;
    }

    public function getTelephone_beneficiaire() {
        return $this->telephone_beneficiaire;
    }

    public function getEmail_beneficiaire() {
        return $this->email_beneficiaire;
    }

    public function getDate_naissance_beneficiaire() {
        return $this->date_naissance_beneficiaire;
    }

    public function getSexe() {
        return $this->sexe;
    }

    public function getMetier() {
        return $this->metier;
    }

    public function getSpecialite() {
        return $this->specialite;
    }

    public function getNombre_d_enfants() {
        return $this->nombre_d_enfants;
    }

    public function getDerniere_connexion() {
        return $this->derniere_connexion;
    }

    public function getChomage() {
        return $this->chomage;
    }

    public function getDepuis() {
        return $this->depuis;
    }

    public function setId_beneficiaire($id_beneficiaire) {
        $this->id_beneficiaire = $id_beneficiaire;
    }

    public function setId_boite_a_outils($id_boite_a_outils) {
        $this->id_boite_a_outils = $id_boite_a_outils;
    }

    public function setId_module($id_module) {
        $this->id_module = $id_module;
    }

    public function setId_situation_familiale($id_situation_familiale) {
        $this->id_situation_familiale = $id_situation_familiale;
    }

    public function setId_niveau_d_etudes($id_niveau_d_etudes) {
        $this->id_niveau_d_etudes = $id_niveau_d_etudes;
    }

    public function setNom_beneficiaire($nom_beneficiaire) {
        $this->nom_beneficiaire = $nom_beneficiaire;
    }

    public function setPrenom_beneficiaire($prenom_beneficiaire) {
        $this->prenom_beneficiaire = $prenom_beneficiaire;
    }

    public function setAdresse_beneficiaire($adresse_beneficiaire) {
        $this->adresse_beneficiaire = $adresse_beneficiaire;
    }

    public function setCp_beneficiaire($cp_beneficiaire) {
        $this->cp_beneficiaire = $cp_beneficiaire;
    }

    public function setVille_beneficiaire($ville_beneficiaire) {
        $this->ville_beneficiaire = $ville_beneficiaire;
    }

    public function setDepartement($_departement) {
        $this->_departement = $_departement;
    }

    public function setTelephone_beneficiaire($telephone_beneficiaire) {
        $this->telephone_beneficiaire = $telephone_beneficiaire;
    }

    public function setEmail_beneficiaire($email_beneficiaire) {
        $this->email_beneficiaire = $email_beneficiaire;
    }

    public function setDate_naissance_beneficiaire($date_naissance_beneficiaire) {
        $this->date_naissance_beneficiaire = $date_naissance_beneficiaire;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    public function setMetier($metier) {
        $this->metier = $metier;
    }

    public function setSpecialite($specialite) {
        $this->specialite = $specialite;
    }

    public function setNombre_d_enfants($nombre_d_enfants) {
        $this->nombre_d_enfants = $nombre_d_enfants;
    }

    public function setDerniere_connexion($derniere_connexion) {
        $this->derniere_connexion = $derniere_connexion;
    }

    public function setChomage($chomage) {
        $this->chomage = $chomage;
    }

    public function setDepuis($depuis) {
        $this->depuis = $depuis;
    }


}