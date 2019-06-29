<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Geststock extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->template->add_css('bootstrap.min');
		$this->template->add_css('font-awesome.min');
		$this->template->add_css('nalika-icon');
		$this->template->add_css('owl.carousel');
		$this->template->add_css('owl.theme');
		$this->template->add_css('owl.transitions');
		$this->template->add_css('animate');
		$this->template->add_css('normalize');
		$this->template->add_css('meanmenu.min');
		$this->template->add_css('main');
		$this->template->add_css('morrisjs/morris');
		$this->template->add_css('scrollbar/jquery.mCustomScrollbar.min');
		$this->template->add_css('metisMenu/metisMenu.min');
		$this->template->add_css('metisMenu/metisMenu-vertical');
		$this->template->add_css('calendar/fullcalendar.min');
		$this->template->add_css('calendar/fullcalendar.print.min');
		$this->template->add_css('modals');
		$this->template->add_css('form/all-type-forms');
		$this->template->add_css('preloader/preloader-style');
		$this->template->add_css('style');
		$this->template->add_css('responsive');
		$this->template->add_css('beta');
		
		$this->template->add_js('vendor/jquery-1.12.4.min');
		$this->template->add_js('bootstrap.min');
		$this->template->add_js('wow.min');
		$this->template->add_js('jquery-price-slider');
		$this->template->add_js('jquery.meanmenu');
		$this->template->add_js('owl.carousel.min');
		$this->template->add_js('jquery.sticky');
		$this->template->add_js('jquery.scrollUp.min');
		$this->template->add_js('scrollbar/jquery.mCustomScrollbar.concat.min');
		$this->template->add_js('scrollbar/mCustomScrollbar-active');
		$this->template->add_js('metisMenu/metisMenu.min');
		$this->template->add_js('metisMenu/metisMenu-active');
		$this->template->add_js('sparkline/jquery.sparkline.min');
		$this->template->add_js('sparkline/jquery.charts-sparkline');
		$this->template->add_js('calendar/moment.min');
		$this->template->add_js('calendar/fullcalendar.min');
		$this->template->add_js('calendar/fullcalendar-active');
		$this->template->add_js('flot/jquery.flot');
		$this->template->add_js('flot/jquery.flot.resize');
		$this->template->add_js('flot/curvedLines');
		$this->template->add_js('flot/flot-active');
		$this->template->add_js('icheck/icheck.min');
		$this->template->add_js('icheck/icheck-active');
		$this->template->add_js('plugins');
		$this->template->add_js('main');
		
		
		$data['nbre_four'] = $this->fournisseur->counte(array('fournisseur_status' => 1));
		$data['nbre_client'] = $this->client->counte(array('client_status' => 1));
		$data['nbre_liv'] = $this->livreur->counte(array('livreur_status' => 1));
		$data['nbre_art'] = $this->article->counte(array('article_status' => 1));
		$data['nbre_employes'] = $this->employe->counte(array('employe_status' => 1));
		$data['active'] = 1;
		$this->template->vars($data);
    }
	
	public function _remap($a){
		if($a == 'super_admin'){
			$this->super_admin();
		}else if(!$this->session->userdata('username')){
			$this->conmexion();
		}else{
			switch($a){
				case '':
					$this->home();
				break;
				case 'index':
					$this->home();
				break;
				case 'home':
					$this->home();
				break;
				//fournisseur
				case 'creer_fournisseur':
					$this->creer_fournisseur();
				break;
				case 'edit_fournisseur':
					$this->edit_fournisseur();
				break;
				case 'liste_fournisseur':
					$this->liste_fournisseur();
				break;
				//article
				case 'creer_article':
					$this->creer_article();
				break;
				case 'liste_article2':
					$this->liste_article2();
				break;
				case 'edit_article':
					$this->edit_article();
				break;
				//transporteur
				case 'creer_livreur':
					$this->creer_livreur();
				break;
				case 'liste_livreur':
					$this->liste_livreur();
				break;
				case 'edit_livreur':
					$this->edit_livreur();
				break;
				//client
				case 'creer_client':
					$this->creer_client();
				break;
				case 'liste_client':
					$this->liste_client();
				break;
				case 'edit_client':
					$this->edit_client();
				break;
				//achats
				case 'creer_achat':
					$this->creer_achat();
				break;
				case 'liste_achat':
					$this->liste_achat();
				break;
				case 'un_achat':
					$this->un_achat();
				break;
				case 'liste_article':
					$this->liste_article();
				break;
				case 'liste_credit':
					$this->liste_credit();
				break;
				case 'modifier_achat':
					$this->modifier_achat();
				break;
				//transport
				case 'creer_transport':
					$this->creer_transport();
				break;
				case 'liste_livraison_attente':
					$this->liste_livraison_attente();
				break;
				case 'une_livraison':
					$this->une_livraison();
				break;
				case 'modifier_livaison':
					$this->modifier_livaison();
				break;
				case 'liste_livraison':
					$this->liste_livraison();
				break;
				case 'liste_livraison_non':
					$this->liste_livraison_non();
				break;
				//vente
				case 'creer_vente':
					$this->creer_vente();
				break;
				case 'liste_vente':
					$this->liste_vente();
				break;
				case 'une_vente':
					$this->une_vente();
				break;
				case 'modifier_vente':
					$this->modifier_vente();
				break;
				case 'liste_creance':
					$this->liste_creance();
				break;
				//banque
				case 'credit':
					$this->credit();
				break;
				case 'debit':
					$this->debit();
				break;
				case 'solde':
					$this->solde();
				break;
				case 'crediter':
					$this->crediter();
				break;
				case 'debiter':
					$this->debiter();
				break;
				case 'journal':
					$this->journal();
				break;
				case 'chercher':
					$this->chercher();
				break;
				case 'logout':
					$this->logout();
				break;
				case 'setting':
					$this->setting();
				break;
				//banque fournisseur
				case 'depot_fournisseur':
					$this->depot_fournisseur();
				break;
				case 'retrait_fournisseur':
					$this->retrait_fournisseur();
				break;
				case 'payer_fournisseur':
					$this->payer_fournisseur();
				break;
				case 'modif_pay_four':
					$this->modif_pay_four();
				break;
				case 'list_paye_fourn':
					$this->list_paye_fourn();
				break;
				case 'solde_un_fournisseur':
					$this->solde_un_fournisseur();
				break;
				//banque client
				case 'depot_client':
					$this->depot_client();
				break;
				case 'retrait_client':
					$this->retrait_client();
				break;
				case 'payement_client':
					$this->payement_client();
				break;
				case 'modifier_pay_client':
					$this->modifier_pay_client();
				break;
				case 'modifier_ret_client':
					$this->modifier_ret_client();
				break;
				case 'list_paye_client':
					$this->list_paye_client();
				break;
				case 'solde_un_client':
					$this->solde_un_client();
				break;
				//employe
				case 'creer_employe':
					$this->creer_employe();
				break;
				case 'liste_employe':
					$this->liste_employe();
				break;
				case 'edit_employe':
					$this->edit_employe();
				break;
				case 'perte':
					$this->perte();
				break;
				case 'perte_employe':
					$this->perte_employe();
				break;
				case 'perte_un_employe':
					$this->perte_un_employe();
				break;
				case 'modifier_perte':
					$this->modifier_perte();
				break;
				case 'payer_salaire':
					$this->payer_salaire();
				break;
				case 'liste_perte_payement':
					$this->liste_perte_payement();
				break;
				case 'liste_payement_salaire':
					$this->liste_payement_salaire();
				break;
				//stats
				case 'stats_mensuel':
					$this->stats_mensuel();
				break;
				case 'stats_annuel':
					$this->stats_annuel();
				break;
				case 'stats_autre':
					$this->stats_autre();
				break;
				case 'sauvegarde':
					$this->sauvegarde();
				break;
				default:
					$this->error();
				break;
			}
		}
	}
		
	public function conmexion(){	
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Nom utilisateur', 'required');
		$this->form_validation->set_rules('password', 'Mot de passe', 'required|min_length[4]');

		if( $this->form_validation->run() !== false ) {
			// then validation passed. Get from db
			$user = $this->input->post('username');
			$res = $this
					 ->users
					 ->verify_user(
						$this->input->post('username'),
						$this->input->post('password')
					 );

			if ( $res !== false ) { // @todo controle isadmin
			  $this->session->set_userdata('isadmin', true);
			  $this->session->set_userdata('username', $user);
			  
			  if(@opendir("D:\\")){
					// Load the DB utility class
					$this->load->dbutil();

					// Backup your entire database and assign it to a variable
					$backup = $this->dbutil->backup();
					
					$dossier = 'D:/an2000';
					if(!is_dir($dossier)){
					   mkdir($dossier);
					}
					
					$dossier = 'D:/an2000/geststock';
					if(!is_dir($dossier)){
					   mkdir($dossier);
					}
					
					$dossier = 'D:/an2000/geststock/sauvegarde';
					if(!is_dir($dossier)){
					   mkdir($dossier);
					}
					
					$dossier = 'D:/an2000/geststock/sauvegarde/'.date('Y_m_d');
					if(!is_dir($dossier)){
					   mkdir($dossier);
					}

					// Load the file helper and write the file to your server
					$this->load->helper('file');
					write_file('D:/an2000/geststock/sauvegarde/'.date('Y_m_d').'/an2000_'.date('Y_m_d_H_i_s').'.gz', $backup);

					// Load the download helper and send the file to your desktop
					//$this->load->helper('download');
					//force_download('an2000_'.date('Y_m_d_H_i_s').'.gz', $backup);
				}
				
			  header('Location: home');
			}
		}
		
		if(isset($_POST['username'])){
			$data['message'] = 'Nom utilisateur ou Mot de passe incorrect';
			$this->template->view_theme('login', 'login', $data);
		}else{
			$this->template->view_theme('login', 'login');
		}
	}
	
	public function setting(){
		$user = $this->users->get_record(array('user_name' => $this->session->userdata('username'), 'users_status' => 1));
		$user = $user[0];
		
		$this->template->add_css('beta');

		$verif = false;
		if(empty($_POST['username'])){
			$_POST['username'] = $user['user_name'];
			$verif = true;
		}
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Nom d\'utilisateur', 'trim|required');
		$this->form_validation->set_rules('password', 'Mot de passe', 'trim|required|min_length[4]');
		
		if ($this->form_validation->run() and $verif == false){
			$data1['user_name'] = $_POST['username'];
			$data1['user_password'] = sha1($_POST['password']);
			
			$this->users->update_record($data1, array('id_users' => $user['id_users']));
			
			header('Location: logout');
		}
		
		$this->template->add_css('touchspin/jquery.bootstrap-touchspin.min');
		$this->template->add_css('datapicker/datepicker3');
		//$this->template->add_css('form/themesaller-forms');
		$this->template->add_css('colorpicker/colorpicker');
		$this->template->add_css('select2/select2.min');
		$this->template->add_css('chosen/bootstrap-chosen');
		$this->template->add_css('ionRangeSlider/ion.rangeSlider');
		$this->template->add_css('ionRangeSlider/ion.rangeSlider.skinFlat');
		
		$this->template->add_js('touchspin/jquery.bootstrap-touchspin.min');
		$this->template->add_js('touchspin/touchspin-active');
		$this->template->add_js('colorpicker/jquery.spectrum.min');
		$this->template->add_js('colorpicker/color-picker-active');
		$this->template->add_js('datapicker/bootstrap-datepicker');
		$this->template->add_js('datapicker/datepicker-active');
		$this->template->add_js('input-mask/jasny-bootstrap.min');
		$this->template->add_js('chosen/chosen.jquery');
		$this->template->add_js('chosen/chosen-active');
		$this->template->add_js('select2/select2.full.min');
		$this->template->add_js('select2/select2-active');
		$this->template->add_js('ionRangeSlider/ion.rangeSlider.min');
		$this->template->add_js('ionRangeSlider/ion.rangeSlider.active');
		$this->template->add_js('rangle-slider/jquery-ui-1.10.4.custom.min');
		$this->template->add_js('rangle-slider/jquery-ui-touch-punch.min');
		$this->template->add_js('rangle-slider/rangle-active');
		$this->template->add_js('knob/jquery.knob');
		$this->template->add_js('knob/knob-active');
		$this->template->add_js('tab');
		
		$this->template->add_js('chosen/chosen.jquery');
		$this->template->add_js('chosen/chosen-active');
		$this->template->view('setting');
		
		//header('Location: home');
	}
	
	public function error(){
		//$this->session->sess_destroy();
		$this->template->view_theme('error', 'login');
	}
	
	public function logout(){
		$this->session->sess_destroy();
		$data['message'] = 'Déconnexion réussie';
		$this->template->view_theme('login', 'login', $data);
	}
	
	public function home(){	
	$this->template->add_css('beta');	
		$data['solde'] = 0;
		$achat = $this->achat->get_record();
		$pay_achat = $this->payement_achat->get_record();
		
		foreach($achat as $ach){
			foreach($pay_achat as $p_a){
				if($ach['num_bordereau'] == $p_a['id_achat']){
					$data['solde'] -= (float) $p_a['montant_paye'];
				}
			}
		}
		
		$vente = $this->vente->get_record();
		$pay_vente = $this->payement_vente->get_record();
		foreach($vente as $ven){
			foreach($pay_vente as $p_v){
				if($ven['id_vente'] == $p_v['id_vente']){
					$data['solde'] += (float) $p_v['montant_paye'];
				}
			}
		}
		
		$livraison = $this->livraison->get_record();
		foreach($livraison as $liv){
			$data['solde'] -= (float) $liv['prix_liv'];
		}
		
		$banque = $this->banque->get_record();
		foreach($banque as $ban){
			if($ban['mouvement'] == 0){
				$data['solde'] -= (float) $ban['somme'];
			}else{
				$data['solde'] += (float) $ban['somme'];
			}
		}
		
		$banque_fournisseur = $this->banque_fournisseur->get_record();
		foreach($banque_fournisseur as $ban){
			if($ban['type_versement'] == 0){
				$data['solde'] += (float) $ban['versement'];
			}else{
				$data['solde'] -= (float) $ban['versement'];
			}
		}
		
		$banque_client = $this->banque_client->get_record();
		foreach($banque_client as $ban){
			if($ban['type_versement'] == 0){
				$data['solde'] -= (float) $ban['somme'];
			}else{
				$data['solde'] += (float) $ban['somme'];
			}
		}
		
		$livraisons = $this->livraison->get_record();
		$data['attente'] = 0;
		foreach($livraisons as $cle => $liv){
			$vente = $this->vente->get_record(array('id_livraison' => $liv['id_livraison']));
			if(empty($vente)){
				$data['attente']++;
			}
		}
		
		//on enleve les salaires
		$salaires = $this->payer_salaire_employe->get_record();
		foreach($salaires as $sal){
			$data['solde'] -= $sal['salaire'] - $sal['perte'];
		}
		
		$data['credit'] = $this->credit();
		
		$data['debit'] = $this->debit();
		
		$this->template->vars($data);
		$this->template->view('home');
	}
	
	public function creer_achat(){
		$this->add_css_js1();
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('bordereau', 'Numéro bordereau', 'trim|required|callback_bordereau_check');
		$this->form_validation->set_rules('article', 'Article', 'required|callback_article_check');
		$this->form_validation->set_rules('fournisseur', 'Fournisseur', 'required|callback_fournisseur_check');
		$this->form_validation->set_rules('qnt', 'Quantité', 'trim|required');
		$this->form_validation->set_rules('prix', 'Prix unitaire', 'trim|required');
		$this->form_validation->set_rules('prix_t', 'Prix total de l\'achat', '');
		$this->form_validation->set_rules('datte_ach', 'Date de l\'achat', 'required');
		$this->form_validation->set_rules('prix_paye', 'Payement', 'callback_prix_paye_check');

		if ($this->form_validation->run() == TRUE){
			$data['num_bordereau'] = strtoupper($_POST['bordereau']);
			$data['id_article'] = $_POST['article'];
			$data['id_fournisseur'] = $_POST['fournisseur'];
			$data['quantite'] = $_POST['qnt'];
			$data['qnt_rest'] = $_POST['qnt'];
			$data['prix_unit'] = $_POST['prix'];
			
			if(!empty($_POST['datte_ach'])){
				$data['date_creation'] = $_POST['datte_ach'];
			}else{
				$data['date_creation'] = date('Y-m-d');
			}
			
			$this->achat->add_record($data);
			
			$data1['id_achat'] = strtoupper($data['num_bordereau']);
			$data1['date_payement'] = $data['date_creation'];
			if($_POST['prix_paye'] == 1){
				$data1['montant_paye'] = (float)$_POST['prix'] * (float)$_POST['qnt'];
			}else{
				$data1['montant_paye'] = 0;
			}
			$this->payement_achat->add_record($data1);
			
			$a = $this->achat->get_record($data);
			$pa = $a[count($a) - 1]['num_bordereau'];
			
			header('Location: un_achat?ach='.$pa);
		}
		
		$data['articles'] = $this->article->get_record();
		$data['fournisseurs'] = $this->fournisseur->get_record();
		$data['active'] = 1;
		$this->template->view('creer_achat', $data);
	}
	
	public function modifier_achat(){
		if(isset($_GET['ach']) and !empty($_GET['ach'])){
			$id_achat = $_GET['ach'];
			$achat = $this->achat->get_record(array('num_bordereau' => $id_achat));
			if(!empty($achat)){
				$this->add_css_js1();
				$achat = $achat[0];
				
				$verif = true;
				if(!isset($_POST['bordereau2'])){
					$_POST['bordereau2'] = $achat['num_bordereau'];
					$_POST['article'] = $achat['id_article'];
					$_POST['fournisseur'] = $achat['id_fournisseur'];
					$_POST['fournisseur'] = $achat['id_fournisseur'];
					$_POST['qnt'] = $achat['quantite'];
					$_POST['prix'] = $achat['prix_unit'];
					$_POST['prix_t'] = $achat['prix_unit'] * $achat['quantite'];
					$_POST['datte_ach'] = $achat['date_creation'];	
					$verif = false;
				}					
				
				$this->form_validation->set_rules('bordereau2', 'Numéro bordereau', 'trim|required|callback_bordereau2_check');
				$this->form_validation->set_rules('article', 'Article', 'required|callback_article_check');
				$this->form_validation->set_rules('fournisseur', 'Fournisseur', 'required|callback_fournisseur_check');
				$this->form_validation->set_rules('datte_ach', 'Date de l\'achat', 'required');
				$this->form_validation->set_rules('qnt', '', '');
				$this->form_validation->set_rules('prix_t', '', '');
				$this->form_validation->set_rules('prix', 'Prix d\'achat', 'required');

				if ($this->form_validation->run() and $verif){
					$data['num_bordereau'] = strtoupper($_POST['bordereau2']);
					$data['id_article'] = $_POST['article'];
					$data['id_fournisseur'] = $_POST['fournisseur'];
					$data['prix_unit'] = $_POST['prix'];
					
					if(!empty($_POST['datte_ach'])){
						$data['date_creation'] = $_POST['datte_ach'];
					}else{
						$data['date_creation'] = date('Y-m-d');
					}
					
					$this->achat->update_record($data, array('num_bordereau' => $id_achat));
					
					$this->vente->update_record(array('num_bordereau' => $data['num_bordereau']), array('num_bordereau' => $id_achat));
					$this->payement_achat->update_record(array('id_achat' => $data['num_bordereau']), array('id_achat' => $id_achat));
					$this->livraison->update_record(array('id_achat' => $data['num_bordereau']), array('id_achat' => $id_achat));
					
					header('Location: un_achat?ach='.$data['num_bordereau']);
				}
				
				$data['articles'] = $this->article->get_record();
				$data['fournisseurs'] = $this->fournisseur->get_record();
				$data['ach'] = $id_achat;
				$data['active'] = 1;
				$this->template->view('modifier_achat', $data);
			}else{
				header('Location: liste_achat');
			}
		}else{
			header('Location: liste_achat');
		}
	}
	
	public function creer_transport(){
		$this->add_css_js1();
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$verif = 1;
		
		if(isset($_GET['trans']) and !empty($_GET['trans'])){
			$_POST['bordereaul'] = $_GET['trans'];
			$this->form_validation->set_rules('bordereaul', 'Numéro de bordereau', 'trim|required|callback_bordereaul_check');
			$verif = 0;
		}else{
			$this->form_validation->set_rules('bordereaul', 'Numéro de bordereau', 'trim|required|callback_bordereaul_check');
			$this->form_validation->set_rules('transporteur', 'Transporteur', 'trim|required|callback_transporteur_check');
			$this->form_validation->set_rules('qnt', 'Quantité à transporter', 'trim|required|callback_qnt_check');
			$this->form_validation->set_rules('num_veh', 'Numéro du véhicule', 'trim');
			$this->form_validation->set_rules('lieu', 'Lieu de livraison', 'trim');
			$this->form_validation->set_rules('prix_l', 'Prix total du transport', 'trim|required|numeric');
			$this->form_validation->set_rules('livrais', 'Livraison', 'trim|required');
			$this->form_validation->set_rules('datte_liv', 'Date de livraison', 'trim|callback_datte_liv_check');
		}
		
		if ($this->form_validation->run() and $verif){
			$data['id_achat'] = $_POST['bordereaul'];
			$data['qnte_article'] = $_POST['qnt'];
			$data['id_livreur'] = $_POST['transporteur'];
			$data['num_vehicule'] = $_POST['num_veh'];
			$data['prix_liv'] = $_POST['prix_l'];
			$data['lieu_liv'] = $_POST['lieu'];
			if(!empty($_POST['datte_liv']) and $_POST['livrais'] == 1){
				$data['date_de_liv'] = $_POST['datte_liv'];
			}else if($_POST['livrais'] == 1){
				$data['date_de_liv'] = date('Y-m-d');
			}else{
				$data['date_de_liv'] = null;
			}
			$data['date_liv'] = date('Y-m-d');
			$achat = $this->achat->get_record(array('num_bordereau' => $_POST['bordereaul']));
			$qnte_rest = $achat[0]['qnt_rest'] - $_POST['qnt'];
			$this->achat->update_record(array('qnt_rest' => $qnte_rest), array('num_bordereau' => $_POST['bordereaul']));
			$this->livraison->add_record($data);
			
			header('Location: liste_livraison_attente');
		}
		
		$data['achats'] = $this->achat->get_record();
		$articles = $this->article->get_record();
		$fournisseurs = $this->fournisseur->get_record();
		foreach($data['achats'] as $cle => $ach){
			if($ach['qnt_rest'] <= 0){
				unset($data['achats'][$cle]);
			}else{
				foreach($articles as $art){
					if($ach['id_article'] == $art['id_article']){
						$data['achats'][$cle]['article'] = $art['nom_article'];
					}
				}
				foreach($fournisseurs as $fou){
					if($ach['id_fournisseur'] == $fou['id_fournisseur']){
						$data['achats'][$cle]['fournisseur'] = $fou['nom_fournisseur'];
					}
				}
			}
		}
		$data['livreurs'] = $this->livreur->get_record();
		$data['active'] = 3;
		$this->template->view('creer_transport', $data);
	}
	
	public function prix_paye_check($str){
		if(!empty($str) and $str != 1 and $str != 2){
			$this->form_validation->set_message('prix_paye_check', 'Veillez renseigner si vous avez payé la totalité du prix d\'achat');
			return FALSE;
		}else if(empty($str)){
			$this->form_validation->set_message('prix_paye_check', 'Veillez renseigner si vous avez payé la totalité du prix d\'achat');
			return FALSE;
		}
		return true;
	}
	
	public function prix_paye3_check($str){
		if(!isset($_POST['p_achat']) or $_POST['p_achat'] == 1){
			return TRUE;
		}else{
			if(empty($_POST['prix_paye3'])){
				$this->form_validation->set_message('prix_paye3_check', 'Le montant payé est obligatoire');
				return FALSE;
			}else{
				$id_achat = $_GET['ach'];
				$achat = $this->achat->get_record(array('num_bordereau' => $id_achat, 'achat_status' => 1));
				if(!empty($achat)){
					$prix_t = $achat[0]['prix_total'];
					$pay_achat = $this->payement_achat->get_record(array('id_achat' => $id_achat, 'payement_achat_status' => 1));
					$paye = 0;
					$i = 0;
					foreach($pay_achat as $p_a){
						$paye += (float) $p_a['montant_paye'];
					}
					if($_POST['prix_paye3'] > (float) $prix_t - $paye){
						$this->form_validation->set_message('prix_paye3_check', 'La somme payée est supérieur au prix restant à payer');
						return FALSE;
					}
				}else{
					$this->form_validation->set_message('prix_paye3_check', 'Le montant payé est obligatoire');
					return FALSE;
				}
			}
			return true;
		}
	}
	
	public function prix_paye4_check($str){
		if(!isset($_POST['p_achat']) or $_POST['p_achat'] == 1){
			return TRUE;
		}else{
			if(empty($_POST['prix_paye4'])){
				$this->form_validation->set_message('prix_paye4_check', 'Le montant payé est obligatoire');
				return FALSE;
			}else{
				$id_vente = $_GET['ven'];
				$vente = $this->vente->get_record(array('id_vente' => $id_vente, 'vente_status' => 1));
				if(!empty($vente)){
					$prix_t = $vente[0]['prix_total'];
					$pay_vente = $this->payement_vente->get_record(array('id_vente' => $id_vente, 'payement_vente_status' => 1));
					$paye = 0;
					$i = 0;
					foreach($pay_vente as $p_v){
						$paye += (float) $p_v['montant_paye'];
					}

					if((float)$_POST['prix_paye4'] > (float) $prix_t - $paye){
						$this->form_validation->set_message('prix_paye4_check', 'La somme payée est supérieur au prix restant à payer');
						return FALSE;
					}
				}else{
					$this->form_validation->set_message('prix_paye4_check', 'Le montant payé est obligatoire');
					return FALSE;
				}
			}
			return true;
		}
	}
	
	public function bordereau_check($str){
		$achats = $this->achat->get_record();
		foreach($achats as $ach){
			if($str == $ach['num_bordereau']){
				$this->form_validation->set_message('bordereau_check', 'Le numéro de bordereau que vous avez saisie existe déjà');
				return FALSE;
			}
		}
		return true;
	}
	
	public function datte_liv_check($str){
		if(isset($_POST['livrais']) and $_POST['livrais'] == 1 and empty($str)){
			$this->form_validation->set_message('datte_liv_check', 'Veillez entrer la date de livraison');
			return FALSE;
		}
		return true;
	}
	
	public function bordereau2_check($str){
		$achats = $this->achat->get_record();
		foreach($achats as $ach){
			if($str == $ach['num_bordereau'] and $ach['num_bordereau'] != $_GET['ach']){
				$this->form_validation->set_message('bordereau2_check', 'Le numéro de bordereau que vous avez saisie existe déjà');
				return FALSE;
			}
		}
		return true;
	}
	
	public function bordereaul_check($str){
		$achats = $this->achat->get_record();
		foreach($achats as $ach){
			if($str == $ach['num_bordereau']){
				return true;
			}
		}
		$this->form_validation->set_message('bordereaul_check', 'Veillez selectionner un numéro de bordereau');
		return FALSE;
	}
	
	public function transporteur_check($str){
		$livreurs = $this->livreur->get_record();
		if($str == '-1' or $str == -1){
			if(isset($_POST['prix_l']) and $_POST['prix_l'] > 0){
				$this->form_validation->set_message('transporteur_check', 'Lorsqu\'il ya pas de livraison, le prix doit être 0 FCFA');
				return FALSE;
			}else{
				return true;
			}
		}
		foreach($livreurs as $liv){
			if($str == $liv['id_livreur']){
				return true;
			}
		}
		$this->form_validation->set_message('transporteur_check', 'Veillez selectionner un transporteur');
		return FALSE;
	}
	
	public function article_check($str){
		$articles = $this->article->get_record();
		foreach($articles as $art){
			if($str == $art['id_article']){
				return true;
			}
		}
		$this->form_validation->set_message('article_check', 'Veillez selectionner un article');
		return FALSE;
	}
	
	public function livraison_check($str){
		$livraison = $this->livraison->get_record(array('id_livraison' => $str));
		if(!empty($livraison)){
			if($livraison[0]['date_de_liv'] == null){
				$this->form_validation->set_message('livraison_check', 'Le transport que vous avez sélectionné n\'a pas encore été livré');
				return FALSE;
			}
			$vente = $this->vente->get_record(array('id_livraison' => $str));
			if(empty($vente)){
				return true;
			}
			$this->form_validation->set_message('livraison_check', 'Ce bordereau est déjà associé à une vente');
			return FALSE;
		}
		$this->form_validation->set_message('livraison_check', 'Veillez selectionner un numéro de bordereau');
		return FALSE;
	}
	
	public function prix_t_check($str){
		if(isset($_POST['livraison']) and !empty($_POST['livraison'])){
			$livraison = $this->livraison->get_record(array('id_livraison' => $_POST['livraison']));
			if(!empty($livraison)){
				$achat = $this->achat->get_record(array('num_bordereau' => $livraison[0]['id_achat']));
				if(!empty($achat)){
					if($str < $achat[0]['prix_unit'] * $livraison[0]['qnte_article'] + $livraison[0]['prix_liv']){
						$this->form_validation->set_message('prix_t_check', 'Le benéfice est négatif, veillez vérifier la vente');
						return FALSE;
					}else{
						return true;
					}
				}
				$this->form_validation->set_message('prix_t_check', 'Veillez Verifier le prix de vente');
				return FALSE;
			}
			$this->form_validation->set_message('prix_t_check', 'Veillez Verifier le prix de vente');
			return FALSE;
		}
		$this->form_validation->set_message('prix_t_check', 'Une erreur est survenue, veillez recommencer plus tard');
		return FALSE;
	}
	
	public function client_check($str){
		$clients = $this->client->get_record();
		foreach($clients as $art){
			if($str == $art['id_client']){
				return true;
			}
		}
		$this->form_validation->set_message('client_check', 'Veillez selectionner un client');
		return FALSE;
	}
	
	public function livreur_check($str){
		$livreurs = $this->livreur->get_record();
		foreach($livreurs as $art){
			if($str == $art['id_livreur'] or $str == 0){
				return true;
			}
		}
		$this->form_validation->set_message('livreur_check', 'veillez selectionner un livreur');
		return FALSE;
	}
	
	public function qnt_check($str){
		$achat = $this->achat->get_record(array('num_bordereau' => $_POST['bordereaul']));
		if(!empty($achat)){
			if($achat[0]['qnt_rest'] >= $str and $str > 0){
				return true;
			}
			if(0 >= $str){
				$this->form_validation->set_message('qnt_check', 'La quantité saisie n\'est pas valide');
				return FALSE;
			}
			$this->form_validation->set_message('qnt_check', 'Il ne reste que '.$achat[0]['qnt_rest'].' sacs pour ce bordereau');
			return FALSE;
		}
		return true;
	}
	
	public function qnte_check($str){
		$livraison = $this->livraison->get_record(array('id_livraison' => $_GET['liv'], 'livraison_status' => 1));
		if(!empty($livraison)){
			$achat = $this->achat->get_record(array('num_bordereau' => $livraison[0]['id_achat']));
			if(!empty($achat)){
				$reste = (float)$achat[0]['qnt_rest'] + (float)$livraison[0]['qnte_article'];
				if($reste >= $str and $str > 0){
					return true;
				}
				if(0 >= $str){
					$this->form_validation->set_message('qnte_check', 'La quantité saisie n\'est pas valide');
					return FALSE;
				}
				$this->form_validation->set_message('qnte_check', 'Il ne reste que '.$reste.' sacs pour ce bordereau');
				return FALSE;
			}
		}
		return FALSE;
	}
	
	public function fournisseur_check($str){
		$fournisseur = $this->fournisseur->get_record();
		foreach($fournisseur as $art){
			if($str == $art['id_fournisseur']){
				return true;
			}
		}
		$this->form_validation->set_message('fournisseur_check', 'veillez selectionner un fournisseur');
		return FALSE;
	}

	public function creer_vente(){
		$this->add_css_js1();
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$trouv = true;
		
		if(isset($_POST['verif'])){
			$trouv = false;
		}else{
			$this->form_validation->set_rules('client', 'Client', 'required|callback_client_check');
			$this->form_validation->set_rules('prix_u', 'Prix unitaire', 'required');
			$this->form_validation->set_rules('prix_t', 'Prix Total de vente', 'required|callback_prix_t_check');
		}
		
		$this->form_validation->set_rules('livraison', 'Numéro bordereau', 'trim|required|callback_livraison_check');

		if ($this->form_validation->run() and $trouv){
			$livraison = $this->livraison->get_record(array('id_livraison' => $_POST['livraison']));
			$data['num_bordereau'] = $livraison[0]['id_achat'];
			$data['id_client'] = $_POST['client'];
			$data['id_livraison'] = $_POST['livraison'];
			$data['prix_unit'] = $_POST['prix_u'];
			
			$data['date_vente'] = $livraison[0]['date_de_liv'];
			
			$this->vente->add_record($data);
			
			$a = $this->vente->get_record($data);
			$pa = $a[count($a) - 1]['id_vente'];
			
			header('Location: une_vente?ven='.$pa);
		}
		
		$achat = $this->achat->get_record();
		$article = $this->article->get_recordAll();
		$livreur = $this->livreur->get_recordAll();
		$vente = $this->vente->get_record();
		$data['livraison'] = $this->livraison->get_record();
		$data['clients'] = $this->client->get_record();
		foreach($data['livraison'] as $cle => $liv){
			$trouv = false;
			foreach($vente as $ven){
				if($liv['id_livraison'] == $ven['id_livraison']){
					$trouv = true;
				}
			}
			if(!$trouv){
				foreach($achat as $ach){
					if($ach['num_bordereau'] == $liv['id_achat']){
						foreach($article as $art){
							if($art['id_article'] == $ach['id_article']){
								$data['livraison'][$cle]['nom_article'] = $art['nom_article'];
							}
						}
					}
				}
				$data['livraison'][$cle]['livreur'] = 'Pas de livraison';
				foreach($livreur as $cli){
					if($cli['id_livreur'] == $liv['id_livreur']){
						$data['livraison'][$cle]['livreur'] = $cli['nom_livreur'];
					}
				}
			}else{
				unset($data['livraison'][$cle]);
			}
		}
		
		$data['active'] = 2;
		$this->template->view('creer_vente', $data);
	}
	
	public function creer_article(){
		$this->template->add_css('touchspin/jquery.bootstrap-touchspin.min');
		$this->template->add_css('datapicker/datepicker3');
		//$this->template->add_css('form/themesaller-forms');
		$this->template->add_css('colorpicker/colorpicker');
		$this->template->add_css('select2/select2.min');
		$this->template->add_css('chosen/bootstrap-chosen');
		$this->template->add_css('ionRangeSlider/ion.rangeSlider');
		$this->template->add_css('ionRangeSlider/ion.rangeSlider.skinFlat');
		$this->template->add_css('beta');
		
		$this->template->add_js('touchspin/jquery.bootstrap-touchspin.min');
		$this->template->add_js('touchspin/touchspin-active');
		$this->template->add_js('colorpicker/jquery.spectrum.min');
		$this->template->add_js('colorpicker/color-picker-active');
		$this->template->add_js('datapicker/bootstrap-datepicker');
		$this->template->add_js('datapicker/datepicker-active');
		$this->template->add_js('input-mask/jasny-bootstrap.min');
		$this->template->add_js('chosen/chosen.jquery');
		$this->template->add_js('chosen/chosen-active');
		$this->template->add_js('select2/select2.full.min');
		$this->template->add_js('select2/select2-active');
		$this->template->add_js('ionRangeSlider/ion.rangeSlider.min');
		$this->template->add_js('ionRangeSlider/ion.rangeSlider.active');
		$this->template->add_js('rangle-slider/jquery-ui-1.10.4.custom.min');
		$this->template->add_js('rangle-slider/jquery-ui-touch-punch.min');
		$this->template->add_js('rangle-slider/rangle-active');
		$this->template->add_js('knob/jquery.knob');
		$this->template->add_js('knob/knob-active');
		$this->template->add_js('tab');
		
		$this->template->add_js('chosen/chosen.jquery');
		$this->template->add_js('chosen/chosen-active');
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nom', 'Nom article', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim');

		if ($this->form_validation->run() == TRUE){
			$data['nom_article'] = $_POST['nom'];
			if(!empty($_POST['description'])){
				$data['description'] = $_POST['description'];
			}else{
				$data['description'] = null;
			}
			$data['date_creation'] = date('Y-m-d');
			$this->article->add_record($data);
			
			header('Location: liste_article2');
		}
		
		$this->template->view('creer_article');
	}
	
	public function creer_livreur(){
		$this->template->add_css('beta');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nom', 'Nom Livreur', 'trim|required');
		$this->form_validation->set_rules('ville', 'Ville de résidence', 'trim|required');
		$this->form_validation->set_rules('tel', 'Téléphone Livreur', 'trim');
		$this->form_validation->set_rules('mail', 'mail Livreur', 'trim|valid_email');

		if ($this->form_validation->run() == TRUE){
			$data['nom_livreur'] = $_POST['nom'];
			$data['ville_livreur'] = $_POST['ville'];
			if(!empty($_POST['tel'])){
				$data['telephone_livreur'] = $_POST['tel'];
			}else{
				$data['telephone_livreur'] = null;
			}
			if(!empty($_POST['mail'])){
				$data['mail_livreur'] = $_POST['mail'];
			}else{
				$data['mail_livreur'] = null;
			}
			$data['date_creation'] = date('Y-m-d');
			$this->livreur->add_record($data);
			
			header('Location: liste_livreur');
		}
		
		$this->template->view('creer_livreur');
	}
	
	public function creer_client(){
		$this->template->add_css('beta');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nom', 'Nom Client', 'trim|required');
		$this->form_validation->set_rules('ville', 'Ville de résidence', 'trim|required');
		$this->form_validation->set_rules('quartier', 'Ville de résidence', 'trim');
		$this->form_validation->set_rules('tel', 'Téléphone Client', 'trim');
		$this->form_validation->set_rules('mail', 'mail Client', 'trim|valid_email');

		if ($this->form_validation->run() == TRUE){
			$data['nom_client'] = $_POST['nom'];
			$data['ville_client'] = $_POST['ville'];
			if(!empty($_POST['tel'])){
				$data['quartier_client'] = $_POST['quartier'];
			}else{
				$data['quartier_client'] = null;
			}
			if(!empty($_POST['tel'])){
				$data['telephone_client'] = $_POST['tel'];
			}else{
				$data['telephone_client'] = null;
			}
			if(!empty($_POST['mail'])){
				$data['mail_client'] = $_POST['mail'];
			}else{
				$data['mail_client'] = null;
			}
			$data['date_creation'] = date('Y-m-d');
			$this->client->add_record($data);
			
			header('Location: liste_client');
		}
		
		$this->template->view('creer_client');
	}
	
	public function creer_employe(){
		$this->template->add_css('beta');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('matricule', 'Matricule Employé', 'trim|required|exact_length[6]');
		$this->form_validation->set_rules('nom', 'Nom Employé', 'trim|required');
		$this->form_validation->set_rules('fonction', 'Fonction Employé', 'trim|required');
		$this->form_validation->set_rules('ville', 'Ville de résidence', 'trim|required');
		$this->form_validation->set_rules('quartier', 'Ville de résidence', 'trim');
		$this->form_validation->set_rules('tel', 'Téléphone Employé', 'trim');
		$this->form_validation->set_rules('mail', 'mail Employé', 'trim|valid_email');
		$this->form_validation->set_rules('salaire', 'Salaire Employé', 'trim|required');

		if ($this->form_validation->run() == TRUE){
			$data['id_employe'] = strtoupper($_POST['matricule']);
			$data['nom_employe'] = $_POST['nom'];
			$data['fonction'] = $_POST['fonction'];
			$data['ville_employe'] = $_POST['ville'];
			$data['salaire'] = $_POST['salaire'];
			if(!empty($_POST['quartier'])){
				$data['quartier_employe'] = $_POST['quartier'];
			}else{
				$data['quartier_employe'] = null;
			}
			if(!empty($_POST['tel'])){
				$data['telephone_employe'] = $_POST['tel'];
			}else{
				$data['telephone_employe'] = null;
			}
			if(!empty($_POST['mail'])){
				$data['mail_employe'] = $_POST['mail'];
			}else{
				$data['mail_employe'] = null;
			}
			$this->employe->add_record($data);
			
			header('Location: liste_employe');
		}
		
		$this->template->view('creer_employe');
	}
	
	public function creer_fournisseur(){
		$this->template->add_css('beta');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nom', 'Nom fournisseur', 'trim|required');
		$this->form_validation->set_rules('ville', 'Ville fournisseur', 'trim|required');
		$this->form_validation->set_rules('tel', 'Téléphone fournisseur', 'trim');
		$this->form_validation->set_rules('mail', 'mail fournisseur', 'trim|valid_email');

		if ($this->form_validation->run() == TRUE){
			$data['nom_fournisseur'] = $_POST['nom'];
			$data['ville_fournisseur'] = $_POST['ville'];
			if(!empty($_POST['tel'])){
				$data['telephone_fournisseur'] = $_POST['tel'];
			}else{
				$data['telephone_fournisseur'] = null;
			}
			if(!empty($_POST['mail'])){
				$data['mail_fournisseur'] = $_POST['mail'];
			}else{
				$data['mail_fournisseur'] = null;
			}
			$data['date_creation'] = date('Y-m-d');
			$this->fournisseur->add_record($data);
			
			header('Location: liste_fournisseur');
		}
		
		$this->template->view('creer_fournisseur');
	}
	
	public function liste_fournisseur(){
		$a = $this->fournisseur->get_record();
		$columns = [];
		foreach($a as $cle => $ach){
			$columns[] = $ach['nom_fournisseur'];
		}
		array_multisort($columns, SORT_ASC, $a);
		
		$d = $this->fournisseur->get_record(array('fournisseur_status' => 0));
		$columns = [];
		foreach($d as $cle => $ach){
			$columns[] = $ach['nom_fournisseur'];
		}
		array_multisort($columns, SORT_ASC, $d);
		
		$data['fournisseurs'] = array_merge($a, $d);
		$this->template->view('liste_fournisseur', $data);
	}
	
	public function liste_employe(){
		$a = $this->employe->get_record();
		arsort($a);
		$columns = [];
		foreach($a as $cle => $ach){
			$columns[] = $ach['nom_employe'];
		}
		array_multisort($columns, SORT_ASC, $a);
		
		$d = $this->employe->get_record(array('employe_status' => 0));
		arsort($d);
		$columns = [];
		foreach($d as $cle => $ach){
			$columns[] = $ach['nom_employe'];
		}
		array_multisort($columns, SORT_ASC, $d);
		
		$data['employes'] = array_merge($a, $d);
		$this->template->view('liste_employe', $data);
	}
	
	public function liste_client(){		
		$a = $this->client->get_record();
		$columns = [];
		foreach($a as $cle => $ach){
			$columns[] = $ach['nom_client'];
		}
		array_multisort($columns, SORT_ASC, $a);
		
		$d = $this->client->get_record(array('client_status' => 0));
		$columns = [];
		foreach($d as $cle => $ach){
			$columns[] = $ach['nom_client'];
		}
		array_multisort($columns, SORT_ASC, $d);
		
		$data['clients'] = array_merge($a, $d);
		$this->template->view('liste_client', $data);
	}
	
	public function liste_livreur(){		
		$a = $this->livreur->get_record();
		$columns = [];
		foreach($a as $cle => $ach){
			$columns[] = $ach['nom_livreur'];
		}
		array_multisort($columns, SORT_ASC, $a);
		
		$d = $this->livreur->get_record(array('livreur_status' => 0));
		$columns = [];
		foreach($d as $cle => $ach){
			$columns[] = $ach['nom_livreur'];
		}
		array_multisort($columns, SORT_ASC, $d);
		
		$data['livreurs'] = array_merge($a, $d);
		$this->template->view('liste_livreur', $data);
	}
	
	public function liste_credit(){
		$this->add_css_js2();
		
		$data['achats'] = $this->achat->get_record();
		$articles = $this->article->get_record();
		$fournisseurs = $this->fournisseur->get_record();
		$pp = $this->payement_achat->get_record();
		foreach($data['achats'] as $cle => $ach){
			$sss = 0;
			foreach($pp as $p){
				if($p['id_achat'] == $ach['num_bordereau']){
					$sss += $p['montant_paye'];
				}
			}
			$ach['prix_total'] = $ach['prix_unit'] * $ach['quantite'];
			$data['achats'][$cle]['reste'] = $sss - $ach['prix_total'];
			
			foreach($fournisseurs as $four){
				if($ach['id_fournisseur'] == $four['id_fournisseur']){
					$data['achats'][$cle]['fournisseur'] = $four['nom_fournisseur'];
					$data['achats'][$cle]['id_fournisseur'] = $four['id_fournisseur'];
				}
			}
		}
		
		//on classe par fournisseur
		$total = 0;
		$par_four = [];
		foreach($data['achats'] as $ach){
			if(!isset($par_four[$ach['id_fournisseur']])){
				$par_four[$ach['id_fournisseur']]['total'] = 0;
				$par_four[$ach['id_fournisseur']]['nom'] = $ach['fournisseur'];
				$par_four[$ach['id_fournisseur']]['id_fournisseur'] = $ach['id_fournisseur'];
			}
			$par_four[$ach['id_fournisseur']]['total'] += $ach['reste'];
		}
		foreach($fournisseurs as $four){
			$verif = false;
			foreach($par_four as $cle => $p_f){
				if($cle == $four['id_fournisseur']){
					$verif = true;
				}
			}
			if(!$verif){
				$par_four[$four['id_fournisseur']]['total'] = 0;
				$par_four[$four['id_fournisseur']]['nom'] = $four['nom_fournisseur'];
				$par_four[$four['id_fournisseur']]['id_fournisseur'] = $four['id_fournisseur'];
			}
		}
		
		//on parcour la banque pour chaque fournisseur
		$banque_fournisseur = $this->banque_fournisseur->get_record();
		foreach($banque_fournisseur as $b_f){
			foreach($par_four as $cle2 => $p_f){
				if($b_f['id_fournisseur'] == $cle2){
					if($b_f['type_versement'] == 0){
						$par_four[$cle2]['total'] -= $b_f['versement'];
					}else{
						$par_four[$cle2]['total'] += $b_f['versement'];
					}
				}
			}
		}
		
		//on ajoute la dette avant le debut
		$dette_avnt = $this->d_f_a->get_record();
		foreach($dette_avnt as $d_a){
			foreach($par_four as $cle2 => $p_f){
				if($d_a['id_fournisseur'] == $cle2){
					$par_four[$cle2]['total'] += (float) $d_a['somme'];
				}
			}
		}
		
		//on calcule la dette totale
		foreach($par_four as $cle2 => $p_f){
			if($par_four[$cle2]['total'] < 0){
				$total += $par_four[$cle2]['total'];
			}
		}
		
		$columns = [];
		foreach($par_four as $cle => $ach){
			$columns[] = $ach['nom'];
		}
		array_multisort($columns, SORT_ASC, $par_four);
		
		$data['par_four'] = $par_four;
		$data['total'] = $total;
		$data['active'] = 5;
		$this->template->view('liste_credit', $data);
	}
	
	public function liste_achat(){
		$this->add_css_js2();
		
		$data['achats'] = $this->achat->get_record();
		$articles = $this->article->get_record();
		$fournisseurs = $this->fournisseur->get_record();
		$pp = $this->payement_achat->get_record();
		foreach($data['achats'] as $cle => $ach){
			foreach($articles as $art){
				if($art['id_article'] == $ach['id_article']){
					$data['achats'][$cle]['article'] = $art['nom_article'];
				}
			}
			foreach($fournisseurs as $four){
				if($ach['id_fournisseur'] == $four['id_fournisseur']){
					$data['achats'][$cle]['fournisseur'] = $four['nom_fournisseur'];
				}
			}
			$sss = 0;
			foreach($pp as $p){
				if($p['id_achat'] == $ach['num_bordereau']){
					$sss += $p['montant_paye'];
				}
			}
			$data['achats'][$cle]['paye'] = $sss;
			$data['achats'][$cle]['prix_total'] = $data['achats'][$cle]['prix_unit'] * $data['achats'][$cle]['quantite'];
		}
		$columns = [];
		foreach($data['achats'] as $ach){
			$columns[] = $ach['date_creation'];
		}
		array_multisort($columns, SORT_DESC, $data['achats']);
		
		$data['achats'] = $this->trie_liste($data['achats'], 'date_creation');
		
		$data['active'] = 1;
		$this->template->view('liste_achat', $data);
	}
	
	public function liste_vente(){
		$this->add_css_js2();
		
		$data['ventes'] = $this->vente->get_record();
		$achat = $this->achat->get_recordAll();
		$articles = $this->article->get_recordAll();
		$livraisons = $this->livraison->get_recordAll();
		$client = $this->client->get_recordAll();
		$fournisseurs = $this->fournisseur->get_recordAll();
		$pp = $this->payement_vente->get_record();
		foreach($data['ventes'] as $cle => $ven){
			foreach($livraisons as $liv){
				if($liv['id_livraison'] == $ven['id_livraison']){
					$data['ventes'][$cle]['livraison'] = $liv['prix_liv'];
					$data['ventes'][$cle]['quantite'] = $liv['qnte_article'];
					$data['ventes'][$cle]['prix_liv'] = $liv['prix_liv'];
					$data['ventes'][$cle]['prix_liv'] = $liv['prix_liv'];
					$data['ventes'][$cle]['prix_total'] = $liv['qnte_article'] * $ven['prix_unit'];
				}
			}
			
			foreach($achat as $ach){
				if($ven['num_bordereau'] == $ach['num_bordereau']){
					foreach($articles as $art){
						if($ach['id_article'] == $art['id_article']){
							$data['ventes'][$cle]['article'] = $art['nom_article'];
						}
					}
					foreach($fournisseurs as $fou){
						if($ach['id_fournisseur'] == $fou['id_fournisseur']){
							$data['ventes'][$cle]['fournisseur'] = $fou['nom_fournisseur'];
						}
					}
					$data['ventes'][$cle]['prix_achat'] = (float)$data['ventes'][$cle]['quantite'] * $ach['prix_unit'];
				}
			}
			
			foreach($client as $cli){
				if($ven['id_client'] == $cli['id_client']){
					$data['ventes'][$cle]['client'] = $cli['nom_client'];
				}
			}
			
			$sss = 0;
			foreach($pp as $p){
				if($p['id_vente'] == $ven['id_vente']){
					$sss += (float) $p['montant_paye'];
				}
			}
			
			$data['ventes'][$cle]['reste'] = $sss - $data['ventes'][$cle]['prix_total'];
		}
		
		$columns = [];
		foreach($data['ventes'] as $liv){
			$columns[] = $liv['date_vente'];
		}
		array_multisort($columns, SORT_DESC, $data['ventes']);
		
		$data['ventes'] = $this->trie_liste($data['ventes'], 'date_vente');
		
		$data['active'] = 2;
		$this->template->view('liste_vente', $data);
	}
	
	public function liste_creance(){
		$this->add_css_js2();
		
		$data['ventes'] = $this->vente->get_joind('livraison', 'vente.id_livraison', 'livraison.id_livraison');
		$client = $this->client->get_record();
		$pp = $this->payement_vente->get_record();
		foreach($data['ventes'] as $cle => $ven){
			$sss = 0;
			foreach($pp as $p){
				if($p['id_vente'] == $ven['id_vente']){
					$sss += (float) $p['montant_paye'];
				}
			}
			$data['ventes'][$cle]['reste'] = $sss - $ven['prix_unit'] * $ven['qnte_article'];
			$data['ventes'][$cle]['paye'] = $sss;
			
			foreach($client as $cli){
				if($ven['id_client'] == $cli['id_client']){
					$data['ventes'][$cle]['client'] = $cli['nom_client'];
				}
			}
		}
		
		//on classe par client
		$total = 0;
		$par_four = [];
		foreach($data['ventes'] as $ach){
			if(!isset($par_four[$ach['id_client']])){
				$par_four[$ach['id_client']]['somme'] = 0;
				$par_four[$ach['id_client']]['nom'] = $ach['client'];
				$par_four[$ach['id_client']]['id_client'] = $ach['id_client'];
			}
			$par_four[$ach['id_client']]['somme'] += $ach['reste'];
		}
		foreach($client as $cli){
			$verif = false;
			foreach($par_four as $cle => $p_f){
				if($cle == $cli['id_client']){
					$verif = true;
				}
			}
			if(!$verif){
				$par_four[$cli['id_client']]['somme'] = 0;
				$par_four[$cli['id_client']]['nom'] = $cli['nom_client'];
				$par_four[$cli['id_client']]['id_client'] = $cli['id_client'];
			}
		}
		
		//on parcour la banque pour chaque client
		$banque_client = $this->banque_client->get_record();
		foreach($banque_client as $b_c){
			foreach($par_four as $cle2 => $p_f){
				if($b_c['id_client'] == $cle2){
					if($b_c['type_versement'] == 0){
						$par_four[$cle2]['somme'] -= $b_c['somme'];
					}else{
						$par_four[$cle2]['somme'] += $b_c['somme'];
					}
				}
			}
		}
		
		//on ajoute la dette avant le debut
		$dette_avnt = $this->c_c_a->get_record();
		foreach($dette_avnt as $d_a){
			foreach($par_four as $cle2 => $p_f){
				if($d_a['id_client'] == $cle2){
					$par_four[$cle2]['somme'] += (float) $d_a['somme'];
				}
			}
		}
		
		//on calcule la dette totale
		foreach($par_four as $cle2 => $p_f){
			if($par_four[$cle2]['somme'] < 0){
				$total += $par_four[$cle2]['somme'];
			}
		}
		
		$columns = [];
		foreach($par_four as $cle => $ach){
			$columns[] = $ach['nom'];
		}
		array_multisort($columns, SORT_ASC, $par_four);
		
		$data['par_four'] = $par_four;
		$data['total'] = $total;
		$data['active'] = 6;
		$this->template->view('liste_creance', $data);
	}
	
	public function liste_livraison_attente(){
		$this->add_css_js2();
		
		$livraisons = $this->livraison->get_record();
		$achat = $this->achat->get_record();
		$articles = $this->article->get_recordAll();
		$fournisseurs = $this->fournisseur->get_recordAll();
		$livreurs = $this->livreur->get_recordAll();
		$transport = [];
		foreach($livraisons as $cle => $liv){
			$vente = $this->vente->get_record(array('id_livraison' => $liv['id_livraison']));
			if(empty($vente)){
				$transport[$cle] = $liv;
				foreach($achat as $ach){
					if($liv['id_achat'] == $ach['num_bordereau']){
						foreach($articles as $art){
							if($ach['id_article'] == $art['id_article']){
								$transport[$cle]['article'] = $art['nom_article'];
							}
						}
						foreach($fournisseurs as $fou){
							if($ach['id_fournisseur'] == $fou['id_fournisseur']){
								$transport[$cle]['fournisseur'] = $fou['nom_fournisseur'];
							}
						}
					}
				}
				$transport[$cle]['livreur'] = 'Pas de livraison';
				foreach($livreurs as $li){
					if($liv['id_livreur'] == $li['id_livreur']){
						$transport[$cle]['livreur'] = $li['nom_livreur'];
					}
				}
			}
		}
		
		$columns = [];
		foreach($transport as $liv){
			$columns[] = $liv['date_liv'];
		}
		array_multisort($columns, SORT_DESC, $transport);
		$data['livraisons'] = $transport;
		$data['active'] = 3;
		$this->template->view('liste_livraison_attente', $data);
	}
	
	public function liste_livraison_non(){
		$this->add_css_js2();
		
		$livraisons = $this->livraison->get_record(array('date_de_liv' => NULL, 'livraison_status' => 1));
		$achat = $this->achat->get_record();
		$articles = $this->article->get_recordAll();
		$fournisseurs = $this->fournisseur->get_recordAll();
		$livreurs = $this->livreur->get_recordAll();
		$transport = [];
		foreach($livraisons as $cle => $liv){
			$transport[$cle] = $liv;
			foreach($achat as $ach){
				if($liv['id_achat'] == $ach['num_bordereau']){
					foreach($articles as $art){
						if($ach['id_article'] == $art['id_article']){
							$transport[$cle]['article'] = $art['nom_article'];
						}
					}
					foreach($fournisseurs as $fou){
						if($ach['id_fournisseur'] == $fou['id_fournisseur']){
							$transport[$cle]['fournisseur'] = $fou['nom_fournisseur'];
						}
					}
				}
			}
			$transport[$cle]['livreur'] = 'Pas de livraison';
			foreach($livreurs as $li){
				if($liv['id_livreur'] == $li['id_livreur']){
					$transport[$cle]['livreur'] = $li['nom_livreur'];
				}
			}
			
			//on verifie sil est associé à une vente
			$vente = $this->vente->get_record(array('id_livraison' => $liv['id_livraison']));
			if(!empty($vente)){
				$transport[$cle]['vente'] = true;
			}else{
				$transport[$cle]['vente'] = false;
			}
		}
		
		$columns = [];
		foreach($transport as $liv){
			$columns[] = $liv['date_liv'];
		}
		array_multisort($columns, SORT_DESC, $transport);
		$data['livraisons'] = $transport;
		$data['active'] = 3;
		$this->template->view('liste_livraison_non', $data);
	}
	
	public function liste_livraison(){
		$this->add_css_js2();
		
		$livraisons = $this->livraison->get_record();
		$achat = $this->achat->get_record();
		$articles = $this->article->get_recordAll();
		$fournisseurs = $this->fournisseur->get_recordAll();
		$livreurs = $this->livreur->get_recordAll();
		$transport = [];
		foreach($livraisons as $cle => $liv){
			$transport[$cle] = $liv;
			foreach($achat as $ach){
				if($liv['id_achat'] == $ach['num_bordereau']){
					foreach($articles as $art){
						if($ach['id_article'] == $art['id_article']){
							$transport[$cle]['article'] = $art['nom_article'];
						}
					}
					foreach($fournisseurs as $fou){
						if($ach['id_fournisseur'] == $fou['id_fournisseur']){
							$transport[$cle]['fournisseur'] = $fou['nom_fournisseur'];
						}
					}
				}
			}
			$transport[$cle]['livreur'] = 'Pas de livraison';
			foreach($livreurs as $li){
				if($liv['id_livreur'] == $li['id_livreur']){
					$transport[$cle]['livreur'] = $li['nom_livreur'];
				}
			}
			
			//on verifie sil est associé à une vente
			$vente = $this->vente->get_record(array('id_livraison' => $liv['id_livraison']));
			if(!empty($vente)){
				$transport[$cle]['vente'] = true;
			}else{
				$transport[$cle]['vente'] = false;
			}
		}
		
		$columns = [];
		foreach($transport as $liv){
			$columns[] = $liv['date_de_liv'];
		}
		array_multisort($columns, SORT_DESC, $transport);
		
		$transport = $this->trie_liste($transport, 'date_de_liv');
		
		$data['livraisons'] = $transport;
		$data['active'] = 3;
		$this->template->view('liste_livraison', $data);
	}
	
	public function list_paye_fourn(){
		$this->add_css_js2();
		
		if(isset($_GET['sil']) and !empty($_GET['sil'])){
			$this->banque_fournisseur->delete_row(array('id_banque_fournisseur' => $_GET['sil']));
		}
		
		//lite des payements
		$achat = $this->achat->get_joind2('payement_achat', 'fournisseur', 'achat.num_bordereau', 'payement_achat.id_achat', 'achat.id_fournisseur', 'fournisseur.id_fournisseur');
		$tab = [];
		$i = 0;
		foreach($achat as $cle => $ven){
			if($ven['montant_paye'] > 0){
				$tab[$i]['date'] = $ven['date_payement'];
				$tab[$i]['versement'] = $ven['montant_paye'];
				$tab[$i]['commentaire'] = '';
				$tab[$i]['fournisseur'] = $ven['nom_fournisseur'];
				$i ++;
			}
		}
				
		$banque = $this->banque_fournisseur->get_joind('fournisseur', 'banque_fournisseur.id_fournisseur', 'fournisseur.id_fournisseur');
		foreach($banque as $cle => $ban){
			if($ban['versement'] > 0){
				$tab[$i]['date'] = $ban['date_banque_fournisseur'];
				$tab[$i]['versement'] = $ban['versement'];
				$tab[$i]['commentaire'] = $ban['commentaire'];
				$tab[$i]['fournisseur'] = $ban['nom_fournisseur'];
				$i ++;
			}
		}
		
		if(!empty($tab)){
			$columns = [];
			foreach($tab as $liv){
				$columns[] = $liv['date'];
			}
			array_multisort($columns, SORT_DESC, $tab);
		}
		
		$tab = $this->trie_liste($tab, 'date');
		
		$data['fournisseurs'] = $tab;
		$data['active'] = 5;
		$this->template->view('list_paye_fourn', $data);
	}
	
	public function solde_un_fournisseur(){
		$this->add_css_js2();
		
		if(isset($_GET['four']) and !empty($_GET['four'])){
			$fournisseur = $this->fournisseur->get_record(array('id_fournisseur' => $_GET['four']));
			if(!empty($fournisseur)){
				$fournisseur = $fournisseur[0];
				
				//lite des payements
				$achat = $this->achat->get_joind('payement_achat', 'achat.num_bordereau', 'payement_achat.id_achat', array('id_fournisseur' => $_GET['four']));
				$tab = [];
				$i = 0;
				foreach($achat as $cle => $ven){
					if($ven['montant_paye'] > 0){
						$tab[$i]['date'] = $ven['date_payement'];
						$tab[$i]['versement'] = $ven['montant_paye'];
						$tab[$i]['commentaire'] = '';
						$i ++;
					}
				}
				
				$banque = $this->banque_fournisseur->get_record(array('id_fournisseur' => $_GET['four']));
				foreach($banque as $cle => $ban){
					if($ban['versement'] > 0){
						$tab[$i]['id_banque_fournisseur'] = $ban['id_banque_fournisseur'];
						$tab[$i]['date'] = $ban['date_banque_fournisseur'];
						$tab[$i]['versement'] = $ban['versement'];
						$tab[$i]['commentaire'] = $ban['commentaire'];
						$i ++;
					}
				}
				
				$deteav = $this->d_f_a->get_record(array('id_fournisseur' => $_GET['four']));
				
				if(!empty($tab)){
					$columns = [];
					foreach($tab as $liv){
						$columns[] = $liv['date'];
					}
					array_multisort($columns, SORT_DESC, $tab);
				}
				
				//liste des achats
				$achat = $this->achat->get_joind2('article', 'fournisseur', 'achat.id_article', 'article.id_article', 'achat.id_fournisseur', 'fournisseur.id_fournisseur', array('achat.id_fournisseur' => $_GET['four']), ', achat.date_creation as date_achat');
				
				$columns = [];
				foreach($achat as $liv){
					$columns[] = $liv['date_achat'];
				}
				array_multisort($columns, SORT_DESC, $achat);
				
				//solde total
				if(empty($deteav)){
					$deteav[0]['somme'] = 0;
				}
				$total = $deteav[0]['somme'];

				foreach($tab as $tb){
					$total += $tb['versement'];
				}
				foreach($achat as $tb){
					$total -= $tb['prix_unit'] * $tb['quantite'];
				}
				
				$data['total'] = $total;
				$data['deteav'] = $deteav[0];
				$data['payement'] = $tab;
				$data['achat'] = $achat;
				$data['client'] = $fournisseur;
				$data['active'] = 5;
				$this->template->view('solde_un_fournisseur', $data);
			}else{
				header('Location: liste_credit');
			}
		}else{
			header('Location: liste_credit');
		}
	}
	
	public function list_paye_client(){
		$this->add_css_js2();
		
		if(isset($_GET['sil']) and !empty($_GET['sil'])){
			$this->banque_client->delete_row(array('id_banque_client' => $_GET['sil']));
		}
		
		//lite des payements
		$vente = $this->vente->get_joind2('payement_vente', 'client', 'vente.id_vente', 'payement_vente.id_vente', 'vente.id_client', 'client.id_client');
		$tab = [];
		$i = 0;
		foreach($vente as $cle => $ven){
			if($ven['montant_paye'] > 0){
				$tab[$i]['client'] = $ven['nom_client'];
				$tab[$i]['date'] = $ven['date_vente'];
				$tab[$i]['somme'] = $ven['montant_paye'];
				$tab[$i]['commentaire'] = '';
				$i ++;
			}
		}
		
		$banque = $this->banque_client->get_joind('client', 'banque_client.id_client', 'client.id_client');
		foreach($banque as $cle => $ban){
			if($ban['somme'] > 0){
				$tab[$i]['client'] = $ban['nom_client'];
				$tab[$i]['date'] = $ban['date_banque_client'];
				$tab[$i]['somme'] = $ban['somme'];
				$tab[$i]['etat'] = $ban['type_versement'];
				$tab[$i]['commentaire'] = $ban['commentaire'];
				$i ++;
			}
		}
		
		$columns = [];
		foreach($tab as $liv){
			$columns[] = $liv['date'];
		}
		array_multisort($columns, SORT_DESC, $tab);
		
		$tab = $this->trie_liste($tab, 'date');
		
		$data['clients'] = $tab;
		$data['active'] = 6;
		$this->template->view('list_paye_client', $data);
	}
	
	public function liste_article(){
		$this->template->add_css('editor/select2');
		$this->template->add_css('editor/datetimepicker');
		$this->template->add_css('editor/bootstrap-editable');
		$this->template->add_css('editor/x-editor-style');
		$this->template->add_css('data-table/bootstrap-table');
		$this->template->add_css('data-table/bootstrap-editable');	
		$this->template->add_css('beta');	
		
		$this->template->add_js('data-table/bootstrap-table');
		$this->template->add_js('data-table/tableExport');
		$this->template->add_js('data-table/data-table-active');
		$this->template->add_js('data-table/bootstrap-table-editable');
		$this->template->add_js('data-table/bootstrap-editable');
		$this->template->add_js('data-table/bootstrap-table-resizable');
		$this->template->add_js('data-table/colResizable-1.5.source');
		$this->template->add_js('data-table/bootstrap-table-export');
		$this->template->add_js('editable/jquery.mockjax');
		$this->template->add_js('editable/mock-active');
		$this->template->add_js('editable/select2');
		$this->template->add_js('editable/moment.min');
		$this->template->add_js('editable/bootstrap-datetimepicker');
		$this->template->add_js('editable/bootstrap-editable');
		$this->template->add_js('editable/xediable-active');
		$this->template->add_js('chart/jquery.peity.min');
		$this->template->add_js('peity/peity-active');
		$this->template->add_js('tab');
		
		$data['articles'] = $this->achat->get_record();
		$articles = $this->article->get_record();
		$fournisseurs = $this->fournisseur->get_record();
		foreach($data['articles'] as $cle => $ach){
			if($ach['qnt_rest'] > 0){
				foreach($articles as $art){
					if($art['id_article'] == $ach['id_article']){
						$data['articles'][$cle]['article'] = $art['nom_article'];
					}
				}
				foreach($fournisseurs as $four){
					if($ach['id_fournisseur'] == $four['id_fournisseur']){
						$data['articles'][$cle]['fournisseur'] = $four['nom_fournisseur'];
					}
				}
			}else{
				unset($data['articles'][$cle]);
			}
		}
		$columns = [];
		foreach($data['articles'] as $ach){
			$columns[] = $ach['date_creation'];
		}
		array_multisort($columns, SORT_DESC, $data['articles']);
		
		$data['articles'] = $this->trie_liste($data['articles'], 'date_creation');
		
		$data['active'] = 1;
		$this->template->view('liste_article', $data);
	}
	
	public function liste_article2(){
		$this->template->add_css('editor/select2');
		$this->template->add_css('editor/datetimepicker');
		$this->template->add_css('editor/bootstrap-editable');
		$this->template->add_css('editor/x-editor-style');
		$this->template->add_css('data-table/bootstrap-table');
		$this->template->add_css('data-table/bootstrap-editable');
		
		$this->template->add_js('data-table/bootstrap-table');
		$this->template->add_js('data-table/tableExport');
		$this->template->add_js('data-table/data-table-active');
		$this->template->add_js('data-table/bootstrap-table-editable');
		$this->template->add_js('data-table/bootstrap-editable');
		$this->template->add_js('data-table/bootstrap-table-resizable');
		$this->template->add_js('data-table/colResizable-1.5.source');
		$this->template->add_js('data-table/bootstrap-table-export');
		$this->template->add_js('editable/jquery.mockjax');
		$this->template->add_js('editable/mock-active');
		$this->template->add_js('editable/select2');
		$this->template->add_js('editable/moment.min');
		$this->template->add_js('editable/bootstrap-datetimepicker');
		$this->template->add_js('editable/bootstrap-editable');
		$this->template->add_js('editable/xediable-active');
		$this->template->add_js('chart/jquery.peity.min');
		$this->template->add_js('peity/peity-active');
		$this->template->add_js('tab');
		
		$a = $this->article->get_record();
		arsort($a);
		$d = $this->article->get_record(array('article_status' => 0));
		arsort($d);
		$data['articles'] = array_merge($a, $d);
		
		$this->template->view('liste_article2', $data);
	}
	
	public function edit_article(){
		$this->template->add_css('beta');
		if(isset($_GET['id']) and !empty($_GET['id'])){
			$data['articles'] = $this->article->get_record(array('id_article' => $_GET['id']));
			if(!empty($data['articles'])){
				$verif = false;
				if(empty($_POST['nom'])){
					$_POST['nom'] = $data['articles'][0]['nom_article'];
					$_POST['description'] = $data['articles'][0]['description'];
					$verif = true;
				}
				
				$this->load->helper(array('form', 'url'));
				$this->load->library('form_validation');
				
				$this->form_validation->set_rules('nom', 'Nom fournisseur', 'trim|required');
				$this->form_validation->set_rules('description', 'Description', 'trim');
				$this->form_validation->run();
				
				if($verif == false){
					if ($this->form_validation->run() == TRUE){
						$data1['nom_article'] = $_POST['nom'];
						$data1['article_status'] = $_POST['desactiver'];
						if(!empty($_POST['description'])){
							$data1['description'] = $_POST['description'];
						}else{
							$data1['description'] = null;
						}
						
						$this->article->update_record($data1, array('id_article' => $_GET['id']));
						
						header('Location: liste_article2');
					}
				}
				
				$this->template->add_css('touchspin/jquery.bootstrap-touchspin.min');
				$this->template->add_css('datapicker/datepicker3');
				//$this->template->add_css('form/themesaller-forms');
				$this->template->add_css('colorpicker/colorpicker');
				$this->template->add_css('select2/select2.min');
				$this->template->add_css('chosen/bootstrap-chosen');
				$this->template->add_css('ionRangeSlider/ion.rangeSlider');
				$this->template->add_css('ionRangeSlider/ion.rangeSlider.skinFlat');
				
				$this->template->add_js('touchspin/jquery.bootstrap-touchspin.min');
				$this->template->add_js('touchspin/touchspin-active');
				$this->template->add_js('colorpicker/jquery.spectrum.min');
				$this->template->add_js('colorpicker/color-picker-active');
				$this->template->add_js('datapicker/bootstrap-datepicker');
				$this->template->add_js('datapicker/datepicker-active');
				$this->template->add_js('input-mask/jasny-bootstrap.min');
				$this->template->add_js('chosen/chosen.jquery');
				$this->template->add_js('chosen/chosen-active');
				$this->template->add_js('select2/select2.full.min');
				$this->template->add_js('select2/select2-active');
				$this->template->add_js('ionRangeSlider/ion.rangeSlider.min');
				$this->template->add_js('ionRangeSlider/ion.rangeSlider.active');
				$this->template->add_js('rangle-slider/jquery-ui-1.10.4.custom.min');
				$this->template->add_js('rangle-slider/jquery-ui-touch-punch.min');
				$this->template->add_js('rangle-slider/rangle-active');
				$this->template->add_js('knob/jquery.knob');
				$this->template->add_js('knob/knob-active');
				$this->template->add_js('tab');
				
				$this->template->add_js('chosen/chosen.jquery');
				$this->template->add_js('chosen/chosen-active');
				
				$data['fournisseurs'] = $this->fournisseur->get_record();
				$this->template->view('edit_article', $data);
			}else{
				$this->liste_article2();
			}
		}else{
			$this->liste_article2();
		}
	}
	
	public function edit_employe(){
		$this->template->add_css('beta');
		if(isset($_GET['id']) and !empty($_GET['id'])){
			$data['employe'] = $this->employe->get_record(array('id_employe' => $_GET['id']));
			if(!empty($data['employe'])){
				$verif = false;
				if(empty($_POST['nom'])){
					$_POST['matricule'] = $data['employe'][0]['id_employe'];
					$_POST['nom'] = $data['employe'][0]['nom_employe'];
					$_POST['fonction'] = $data['employe'][0]['fonction'];
					$_POST['ville'] = $data['employe'][0]['ville_employe'];
					$_POST['quartier'] = $data['employe'][0]['quartier_employe'];
					$_POST['tel'] = $data['employe'][0]['telephone_employe'];
					$_POST['mail'] = $data['employe'][0]['mail_employe'];
					$_POST['salaire'] = $data['employe'][0]['salaire'];
					$verif = true;
				}
				
				$this->load->helper(array('form', 'url'));
				$this->load->library('form_validation');
				
				$this->form_validation->set_rules('matricule', 'Matricule Employé', 'trim|required|exact_length[6]');
				$this->form_validation->set_rules('nom', 'Nom Employé', 'trim|required');
				$this->form_validation->set_rules('fonction', 'Fonction Employé', 'trim|required');
				$this->form_validation->set_rules('ville', 'Ville de résidence', 'trim|required');
				$this->form_validation->set_rules('quartier', 'Ville de résidence', 'trim');
				$this->form_validation->set_rules('tel', 'Téléphone Employé', 'trim');
				$this->form_validation->set_rules('mail', 'mail Employé', 'trim|valid_email');
				$this->form_validation->set_rules('salaire', 'Salaire Employé', 'trim|required');
				$this->form_validation->run();
				
				if($verif == false){
					if ($this->form_validation->run() == TRUE){
						$data1['id_employe'] = strtoupper($_POST['matricule']);
						$data1['nom_employe'] = $_POST['nom'];
						$data1['fonction'] = $_POST['fonction'];
						$data1['ville_employe'] = $_POST['ville'];
						$data1['salaire'] = $_POST['salaire'];
						$data1['employe_status'] = $_POST['desactiver'];
						if(!empty($_POST['quartier'])){
							$data1['quartier_employe'] = $_POST['quartier'];
						}else{
							$data1['quartier_employe'] = null;
						}
						if(!empty($_POST['tel'])){
							$data1['telephone_employe'] = $_POST['tel'];
						}else{
							$data1['telephone_employe'] = null;
						}
						if(!empty($_POST['mail'])){
							$data1['mail_employe'] = $_POST['mail'];
						}else{
							$data1['mail_employe'] = null;
						}
						$this->employe->update_record($data1, array('id_employe' => $_GET['id']));
						
						header('Location: liste_employe');
					}
				}
				
				$this->template->view('edit_employe', $data);
			}else{
				$this->liste_employe();
			}
		}else{
			$this->liste_employe();
		}
	}
	
	public function edit_fournisseur(){
		$this->template->add_css('beta');
		if(isset($_GET['id']) and !empty($_GET['id'])){
			$data['fournisseurs'] = $this->fournisseur->get_record(array('id_fournisseur' => $_GET['id']));
			if(!empty($data['fournisseurs'])){
				$verif = false;
				if(empty($_POST['nom'])){
					$_POST['nom'] = $data['fournisseurs'][0]['nom_fournisseur'];
					$_POST['ville'] = $data['fournisseurs'][0]['ville_fournisseur'];
					$_POST['tel'] = $data['fournisseurs'][0]['telephone_fournisseur'];
					$_POST['mail'] = $data['fournisseurs'][0]['mail_fournisseur'];
					$verif = true;
				}
				
				$this->load->helper(array('form', 'url'));
				$this->load->library('form_validation');
				
				$this->form_validation->set_rules('nom', 'Nom fournisseur', 'trim|required');
				$this->form_validation->set_rules('ville', 'Ville fournisseur', 'trim|required');
				$this->form_validation->set_rules('tel', 'Téléphone fournisseur Confirmation', 'trim');
				$this->form_validation->set_rules('mail', 'mail fournisseur', 'trim|valid_email');
				$this->form_validation->run();
				
				if($verif == false){
					if ($this->form_validation->run() == TRUE){
						$data1['nom_fournisseur'] = $_POST['nom'];
						$data1['ville_fournisseur'] = $_POST['ville'];
						$data1['fournisseur_status'] = $_POST['desactiver'];
						if(!empty($_POST['tel'])){
							$data1['telephone_fournisseur'] = $_POST['tel'];
						}else{
							$data1['telephone_fournisseur'] = null;
						}
						if(!empty($_POST['mail'])){
							$data1['mail_fournisseur'] = $_POST['mail'];
						}else{
							$data1['mail_fournisseur'] = null;
						}
						$this->fournisseur->update_record($data1, array('id_fournisseur' => $_GET['id']));
						
						header('Location: liste_fournisseur');
					}
				}
				
				$this->template->view('edit_fournisseur', $data);
			}else{
				$this->liste_fournisseur();
			}
		}else{
			$this->liste_fournisseur();
		}
	}
	
	public function edit_livreur(){
		$this->template->add_css('beta');
		if(isset($_GET['id']) and !empty($_GET['id'])){
			$data['livreurs'] = $this->livreur->get_record(array('id_livreur' => $_GET['id']));
			if(!empty($data['livreurs'])){
				$verif = false;
				if(empty($_POST['nom'])){
					$_POST['nom'] = $data['livreurs'][0]['nom_livreur'];
					$_POST['ville'] = $data['livreurs'][0]['ville_livreur'];
					$_POST['tel'] = $data['livreurs'][0]['telephone_livreur'];
					$_POST['mail'] = $data['livreurs'][0]['mail_livreur'];
					$verif = true;
				}
				
				$this->load->helper(array('form', 'url'));
				$this->load->library('form_validation');
				
				$this->form_validation->set_rules('nom', 'Nom Livreur', 'trim|required');
				$this->form_validation->set_rules('ville', 'Ville de résidence', 'trim|required');
				$this->form_validation->set_rules('tel', 'Téléphone Livreur', 'trim');
				$this->form_validation->set_rules('mail', 'mail Livreur', 'trim|valid_email');

				if ($this->form_validation->run() == TRUE and !$verif){
					$data1['nom_livreur'] = $_POST['nom'];
					$data1['ville_livreur'] = $_POST['ville'];
					$data1['livreur_status'] = $_POST['desactiver'];
					if(!empty($_POST['tel'])){
						$data1['telephone_livreur'] = $_POST['tel'];
					}else{
						$data1['telephone_livreur'] = null;
					}
					if(!empty($_POST['mail'])){
						$data1['mail_livreur'] = $_POST['mail'];
					}else{
						$data1['mail_livreur'] = null;
					}
					$this->livreur->update_record($data1, array('id_livreur' => $_GET['id']));
					
					header('Location: liste_livreur');
				}
				
				$this->template->view('edit_livreur', $data);
			}else{
				$this->liste_livreur();
			}
		}else{
			$this->liste_livreur();
		}
	}
	
	public function edit_client(){
		$this->template->add_css('beta');
		
		if(isset($_GET['id']) and !empty($_GET['id'])){
			$data['clients'] = $this->client->get_record(array('id_client' => $_GET['id']));
			if(!empty($data['clients'])){
				$verif = false;
				if(empty($_POST['nom'])){
					$_POST['nom'] = $data['clients'][0]['nom_client'];
					$_POST['ville'] = $data['clients'][0]['ville_client'];
					$_POST['quartier'] = $data['clients'][0]['quartier_client'];
					$_POST['tel'] = $data['clients'][0]['telephone_client'];
					$_POST['mail'] = $data['clients'][0]['mail_client'];
					$verif = true;
				}
				
				$this->load->helper(array('form', 'url'));
				$this->load->library('form_validation');
				
				$this->form_validation->set_rules('nom', 'Nom Client', 'trim|required');
				$this->form_validation->set_rules('ville', 'Ville de résidence', 'trim|required');
				$this->form_validation->set_rules('quartier', 'Ville de résidence', 'trim');
				$this->form_validation->set_rules('tel', 'Téléphone Client', 'trim');
				$this->form_validation->set_rules('mail', 'mail Client', 'trim|valid_email');

				if ($this->form_validation->run() == TRUE and !$verif){
					$data1['nom_client'] = $_POST['nom'];
					$data1['ville_client'] = $_POST['ville'];
					$data1['client_status'] = $_POST['desactiver'];
					if(!empty($_POST['tel'])){
						$data1['quartier_client'] = $_POST['quartier'];
					}else{
						$data1['quartier_client'] = null;
					}
					if(!empty($_POST['tel'])){
						$data1['telephone_client'] = $_POST['tel'];
					}else{
						$data1['telephone_client'] = null;
					}
					if(!empty($_POST['mail'])){
						$data1['mail_client'] = $_POST['mail'];
					}else{
						$data1['mail_client'] = null;
					}
					$this->client->update_record($data1, array('id_client' => $_GET['id']));
					
					header('Location: liste_client');
				}
				
				$this->template->view('edit_client', $data);
			}else{
				$this->liste_client();
			}
		}else{
			$this->liste_client();
		}
	}
	
	public function credit(){
		$data['achats'] = $this->achat->get_record();
		$articles = $this->article->get_record();
		$fournisseurs = $this->fournisseur->get_record();
		$pp = $this->payement_achat->get_record();
		foreach($data['achats'] as $cle => $ach){
			$sss = 0;
			foreach($pp as $p){
				if($p['id_achat'] == $ach['num_bordereau']){
					$sss += $p['montant_paye'];
				}
			}
			$ach['prix_total'] = $ach['prix_unit'] * $ach['quantite'];
			$data['achats'][$cle]['reste'] = $sss - $ach['prix_total'];
			
			foreach($fournisseurs as $four){
				if($ach['id_fournisseur'] == $four['id_fournisseur']){
					$data['achats'][$cle]['fournisseur'] = $four['nom_fournisseur'];
				}
			}
		}
		
		//on classe par fournisseur
		$total = 0;
		$par_four = [];
		foreach($data['achats'] as $ach){
			if(!isset($par_four[$ach['id_fournisseur']])){
				$par_four[$ach['id_fournisseur']]['total'] = 0;
				$par_four[$ach['id_fournisseur']]['nom'] = $ach['fournisseur'];
			}
			$par_four[$ach['id_fournisseur']]['total'] += $ach['reste'];
		}
		foreach($fournisseurs as $four){
			$verif = false;
			foreach($par_four as $cle => $p_f){
				if($cle == $four['id_fournisseur']){
					$verif = true;
				}
			}
			if(!$verif){
				$par_four[$four['id_fournisseur']]['total'] = 0;
				$par_four[$four['id_fournisseur']]['nom'] = $four['nom_fournisseur'];
			}
		}
		
		//on parcour la banque pour chaque fournisseur
		$banque_fournisseur = $this->banque_fournisseur->get_record();
		foreach($banque_fournisseur as $b_f){
			foreach($par_four as $cle2 => $p_f){
				if($b_f['id_fournisseur'] == $cle2){
					if($b_f['type_versement'] == 0){
						$par_four[$cle2]['total'] -= $b_f['versement'];
					}else{
						$par_four[$cle2]['total'] += $b_f['versement'];
					}
				}
			}
		}
		
		//on ajoute la dette avant le debut
		$dette_avnt = $this->d_f_a->get_record();
		foreach($dette_avnt as $d_a){
			foreach($par_four as $cle2 => $p_f){
				if($d_a['id_fournisseur'] == $cle2){
					$par_four[$cle2]['total'] += (float) $d_a['somme'];
				}
			}
		}
		
		//on calcule la dette totale
		foreach($par_four as $cle2 => $p_f){
			if($par_four[$cle2]['total'] < 0){
				$total += $par_four[$cle2]['total'];
			}
		}
		
		return $total;
	}
	
	public function debit(){
		$data['ventes'] = $this->vente->get_joind('livraison', 'vente.id_livraison', 'livraison.id_livraison');
		$client = $this->client->get_record();
		$pp = $this->payement_vente->get_record();
		foreach($data['ventes'] as $cle => $ven){
			$sss = 0;
			foreach($pp as $p){
				if($p['id_vente'] == $ven['id_vente']){
					$sss += (float) $p['montant_paye'];
				}
			}
			$data['ventes'][$cle]['prix_total'] = $ven['prix_unit'] * $ven['qnte_article'];
			$ven['prix_total'] = $ven['prix_unit'] * $ven['qnte_article'];
			$data['ventes'][$cle]['reste'] = $sss - $ven['prix_total'];
			$data['ventes'][$cle]['paye'] = $sss;
			
			foreach($client as $cli){
				if($ven['id_client'] == $cli['id_client']){
					$data['ventes'][$cle]['client'] = $cli['nom_client'];
				}
			}
		}
		
		//on classe par client
		$total = 0;
		$par_four = [];
		foreach($data['ventes'] as $ach){
			if(!isset($par_four[$ach['id_client']])){
				$par_four[$ach['id_client']]['somme'] = 0;
				$par_four[$ach['id_client']]['nom'] = $ach['client'];
			}
			$par_four[$ach['id_client']]['somme'] += $ach['reste'];
		}
		foreach($client as $cli){
			$verif = false;
			foreach($par_four as $cle => $p_f){
				if($cle == $cli['id_client']){
					$verif = true;
				}
			}
			if(!$verif){
				$par_four[$cli['id_client']]['somme'] = 0;
				$par_four[$cli['id_client']]['nom'] = $cli['nom_client'];
			}
		}
		
		//on parcour la banque pour chaque client
		$banque_client = $this->banque_client->get_record();
		foreach($banque_client as $b_c){
			foreach($par_four as $cle2 => $p_f){
				if($b_c['id_client'] == $cle2){
					if($b_c['type_versement'] == 0){
						$par_four[$cle2]['somme'] -= $b_c['somme'];
					}else{
						$par_four[$cle2]['somme'] += $b_c['somme'];
					}
				}
			}
		}
		
		//on ajoute la dette avant le debut
		$dette_avnt = $this->c_c_a->get_record();
		foreach($dette_avnt as $d_a){
			foreach($par_four as $cle2 => $p_f){
				if($d_a['id_client'] == $cle2){
					$par_four[$cle2]['somme'] += (float) $d_a['somme'];
				}
			}
		}
		
		//on calcule la dette totale
		foreach($par_four as $cle2 => $p_f){
			if($par_four[$cle2]['somme'] < 0){
				$total += $par_four[$cle2]['somme'];
			}
		}
		
		return $total;
	}
	
	public function solde(){
		$this->template->add_css('tabs');
		
		$data['solde'] = 0;
		
		$achat = $this->achat->get_record();
		$pay_achat = $this->payement_achat->get_record();
		
		foreach($achat as $ach){
			foreach($pay_achat as $p_a){
				if($ach['num_bordereau'] == $p_a['id_achat']){
					$data['solde'] -= (float) $p_a['montant_paye'];
				}
			}
		}
		
		$vente = $this->vente->get_record();
		$pay_vente = $this->payement_vente->get_record();
		foreach($vente as $ven){
			foreach($pay_vente as $p_v){
				if($ven['id_vente'] == $p_v['id_vente']){
					$data['solde'] += (float) $p_v['montant_paye'];
				}
			}
		}
		
		$livraison = $this->livraison->get_record();
		foreach($livraison as $liv){
			$data['solde'] -= (float) $liv['prix_liv'];
		}
		
		$banque = $this->banque->get_record();
		foreach($banque as $ban){
			if($ban['mouvement'] == 0){
				$data['solde'] -= (float) $ban['somme'];
			}else{
				$data['solde'] += (float) $ban['somme'];
			}
		}
		
		$banque_fournisseur = $this->banque_fournisseur->get_record();
		foreach($banque_fournisseur as $ban){
			if($ban['type_versement'] == 0){
				$data['solde'] += (float) $ban['versement'];
			}else{
				$data['solde'] -= (float) $ban['versement'];
			}
		}
		
		$banque_client = $this->banque_client->get_record();
		foreach($banque_client as $ban){
			if($ban['type_versement'] == 0){
				$data['solde'] -= (float) $ban['somme'];
			}else{
				$data['solde'] += (float) $ban['somme'];
			}
		}
		
		//on enleve les salaires
		$salaires = $this->payer_salaire_employe->get_record();
		foreach($salaires as $sal){
			$data['solde'] -= $sal['salaire'] - $sal['perte'];
		}
		
		$data['credit'] = $this->credit();
		$data['debit'] = $this->debit();
		$data['active'] = 4;
		$this->template->view('solde', $data);
	}
	
	public function crediter(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('credit', 'Montant à créditer', 'trim|required');
		$this->form_validation->set_rules('message', 'Commentaire', 'trim');
		$this->form_validation->set_rules('datte', 'Date', 'trim|required');

		if ($this->form_validation->run() == TRUE){
			$data['somme'] = $_POST['credit'];
			$data['commentaire'] = $_POST['message'];
			$data['mouvement'] = 1;
			if(!empty($data['datte'])){
				$data['date_creation'] = $data['datte'];
			}else{
				$data['date_creation'] = date('Y-m-d');
			}
			
			$this->banque->add_record($data);
			
			header('Location: solde');
		}
		$data['active'] = 4;
		$this->template->view('credite', $data);
	}
	
	public function debiter(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('credit', 'Montant à débiter', 'trim|required');
		$this->form_validation->set_rules('message', 'Commentaire', 'trim');
		$this->form_validation->set_rules('datte', 'Date', 'trim|required');

		if ($this->form_validation->run() == TRUE){
			$data['somme'] = $_POST['credit'];
			$data['commentaire'] = $_POST['message'];
			$data['mouvement'] = 0;
			if(!empty($data['datte'])){
				$data['date_creation'] = $data['datte'];
			}else{
				$data['date_creation'] = date('Y-m-d');
			}
			
			$this->banque->add_record($data);
			
			header('Location: solde');
		}
		$data['active'] = 4;
		$this->template->view('debiter', $data);
	}
	
	public function journal(){
		$this->add_css_js2();
		
		$data['journal'] = [];
		$i = 0;
		$achat = $this->achat->get_record();
		$articles = $this->article->get_recordAll();
		$fournisseurs = $this->fournisseur->get_recordAll();
		$pay_ach = $this->payement_achat->get_record();
		$pay_vente = $this->payement_vente->get_record();
		$vente = $this->vente->get_record();
		$client = $this->client->get_recordAll();
		$livreur = $this->livreur->get_recordAll();
		$livraison = $this->livraison->get_record();
		$banque = $this->banque->get_record();
		
		// on recupere l'historique des payements des achats
		foreach($pay_ach as $p_a){
			if($p_a['montant_paye'] > 0){
				$data['journal'][$i]['date'] = $p_a['date_payement'];
				$data['journal'][$i]['mouvement'] = 'Payement achat';
				$data['journal'][$i]['libelle'] = 'Achat de ';
				foreach($achat as $ach){
					if($ach['num_bordereau'] == $p_a['id_achat']){
						foreach($articles as $art){
							if($art['id_article'] == $ach['id_article']){
								$data['journal'][$i]['libelle'] .= $art['nom_article'].' chez ';
							}
						}
						foreach($fournisseurs as $fou){
							if($ach['id_fournisseur'] == $fou['id_fournisseur']){
								$data['journal'][$i]['libelle'] .= $fou['nom_fournisseur'];
							}
						}
					}
				}
				$data['journal'][$i]['debit'] = $p_a['montant_paye'];
				$data['journal'][$i]['credit'] = 0;
				$data['journal'][$i]['couleur'] = 'bleu' ;
				$i++;
			}
		}
		
		// on recupere l'historique des payements des ventes
		foreach($pay_vente as $p_v){
			if($p_v['montant_paye'] > 0){
				$data['journal'][$i]['date'] = $p_v['date_payement'];
				$data['journal'][$i]['mouvement'] = 'Payement vente';
				$data['journal'][$i]['libelle'] = 'Vente de ';
				foreach($vente as $ven){
					if($ven['id_vente'] == $p_v['id_vente']){
						foreach($achat as $ach){
							if($ven['num_bordereau'] == $ach['num_bordereau']){
								foreach($articles as $art){
									if($art['id_article'] == $ach['id_article']){
										$data['journal'][$i]['libelle'] .= $art['nom_article'].' à ';
									}
								}
							}
						}
						foreach($client as $cli){
							if($cli['id_client'] == $ven['id_client']){
								$data['journal'][$i]['libelle'] .= $cli['nom_client'];
							}
						}
					}
				}
				$data['journal'][$i]['debit'] = 0;
				$data['journal'][$i]['credit'] = $p_v['montant_paye'];
				$data['journal'][$i]['couleur'] = 'vert' ;
				$i++;
			}
		}
		
		// on recupere l'historique des transport
		foreach($livraison as $liv){
			if($liv['prix_liv'] > 0){
				$data['journal'][$i]['date'] = $liv['date_liv'];
				$data['journal'][$i]['mouvement'] = 'Payement transport';
				$data['journal'][$i]['libelle'] = 'Transport fait par  ';
				$lii = 'personne';
				foreach($livreur as $li){
					if($li['id_livreur'] == $liv['id_livreur']){
						$lii = $li['nom_livreur'];
					}
				}
				$data['journal'][$i]['libelle'] .= $lii;
				
				$data['journal'][$i]['debit'] = $liv['prix_liv'];
				$data['journal'][$i]['credit'] = 0;
				$data['journal'][$i]['couleur'] = 'rose' ;
				$i++;
			}
		}
		
		// on recupere les crédits et les débits
		foreach($banque as $ban){
			$data['journal'][$i]['date'] = $ban['date_creation'];
			$data['journal'][$i]['mouvement'] = 'Mouvement banque';
			if($ban['mouvement'] == 1){
				$data['journal'][$i]['libelle'] = $ban['commentaire'];
				$data['journal'][$i]['debit'] = 0;
				$data['journal'][$i]['credit'] = $ban['somme'];
				$data['journal'][$i]['couleur'] = 'red' ;
			}else{
				$data['journal'][$i]['libelle'] = $ban['commentaire'];
				$data['journal'][$i]['debit'] = $ban['somme'];
				$data['journal'][$i]['credit'] = 0;
				$data['journal'][$i]['couleur'] = 'red' ;
			}
			$i++;
		}
		
		//on recupure tout ce qui a ete versé aux fournisseurs
		$banque_fournisseur = $this->banque_fournisseur->get_record();
		foreach($banque_fournisseur as $ban){
			$data['journal'][$i]['date'] = $ban['date_banque_fournisseur'];
			if($ban['type_versement'] == 1){
				$data['journal'][$i]['mouvement'] = 'Payement achat';
				$data['journal'][$i]['libelle'] = 'Payement facture à ';
				foreach($fournisseurs as $fou){
					if($ban['id_fournisseur'] == $fou['id_fournisseur']){
						$data['journal'][$i]['libelle'] .= $fou['nom_fournisseur'];
					}
				}
				$data['journal'][$i]['debit'] = $ban['versement'];
				$data['journal'][$i]['credit'] = 0;
				$data['journal'][$i]['couleur'] = 'bleu' ;
			}else{
				//prevu si il ya un bédit dans le compte du fourniseur, mais on ne gere pas ca encore
			}
			$i++;
		}
		
		//on recupere tout ce que les clients ont versé
		$banque_client = $this->banque_client->get_record();
		foreach($banque_client as $ban){
			$data['journal'][$i]['date'] = $ban['date_banque_client'];
			if($ban['type_versement'] == 1){
				$data['journal'][$i]['mouvement'] = 'Payement Vente';
				$data['journal'][$i]['libelle'] = 'Payement facture de ';
				foreach($client as $cli){
					if($cli['id_client'] == $ban['id_client']){
						$data['journal'][$i]['libelle'] .= $cli['nom_client'];
					}
				}
				$data['journal'][$i]['debit'] = 0;
				$data['journal'][$i]['credit'] = $ban['somme'];
				$data['journal'][$i]['couleur'] = 'vert' ;
			}else{
				//prevu si il ya un bédit dans le compte du client, mais on ne gere pas ca encore
			}
			$i++;
		}
		
		$columns = [];
		foreach($data['journal'] as $liv){
			$columns[] = $liv['date'];
		}
		array_multisort($columns, SORT_ASC, $data['journal']);
		
		$total = $data['journal'][0]['credit'];
		$data['journal'][0]['solde'] = 0;
		foreach($data['journal'] as $cle => $jou){
			if($cle > 0){
				$data['journal'][$cle]['solde'] = $total;
				$total += $jou['credit'];
				$total -= $jou['debit'];
			}
			
		}
		
		arsort($data['journal']);
		$data['active'] = 4;
		$this->template->view('journal', $data);
	}

	public function un_achat(){
		if(isset($_GET['ach'])){
			$id_achat = $_GET['ach'];
			$achat = $this->achat->get_record(array('num_bordereau' => $id_achat, 'achat_status' => 1));
			if(!empty($achat)){
				//on verifie si on supprime et on le fait
				if(isset($_POST['supprimer']) and $_POST['supprimer'] == 'oui'){
					$this->achat->delete_row(array('num_bordereau' => $id_achat));
					$this->payement_achat->delete_row(array('id_achat' => $id_achat));
					$this->livraison->delete_row(array('id_achat' => $id_achat));
					$vente = $this->vente->get_record(array('num_bordereau' => $id_achat));
					$this->vente->delete_row(array('num_bordereau' => $id_achat));
					if(!empty($vente)){
						foreach($vente as $ven){
							$this->payement_vente->delete_row(array('id_vente' => $ven['id_vente']));
						}
					}
					header('Location: liste_achat');
				}
				
				$achat = $achat[0];
				$pay_achat = $this->payement_achat->get_record(array('id_achat' => $id_achat, 'payement_achat_status' => 1));
				$paye = 0;
				$i = 0;
				foreach($pay_achat as $p_a){
					$paye += (float) $p_a['montant_paye'];
					$achat['payement'][$i]['montant'] = $p_a['montant_paye'];
					$achat['payement'][$i]['date'] = $p_a['date_payement'];
					$i++;
				}
				$achat['deja'] = $paye;
				$achat['prix_total'] = $achat['prix_unit'] * $achat['quantite'];
				if($achat['deja'] - $achat['prix_total'] == 0){
					$achat['etat_payement'] = 1;
				}else{
					$achat['etat_payement'] = 0;
				}
				$article = $this->article->get_record(array('id_article' => $achat['id_article']));
				$fournisseur = $this->fournisseur->get_record(array('id_fournisseur' => $achat['id_fournisseur']));
				$achat['article'] = $article[0]['nom_article'];
				$achat['fournisseur'] = $fournisseur[0]['nom_fournisseur'];
				
				$data['achat'] = $achat;
				$data['active'] = 1;
				$this->template->view('un_achat', $data);
			}else{
				header('Location: liste_achat');
			}
		}else{
			header('Location: liste_achat');
		}
	}
	
	public function une_livraison(){
		$this->add_css_js1();

		if(isset($_GET['liv'])){
			$id_liv = $_GET['liv'];
			$livraison = $this->livraison->get_record(array('id_livraison' => $id_liv, 'livraison_status' => 1));
			if(!empty($livraison)){
				$livraison = $livraison[0];
				
				$data['vente'] = $this->vente->get_record(array('id_livraison' => $id_liv, 'vente_status' => 1));
				if(!empty($data['vente'])){
					$data['vente'] = $data['vente'][0];
					$client = $this->client->get_record(array('id_client' => $data['vente']['id_client']));
					$data['vente']['client'] = $client[0]['nom_client'];
					$data['vente']['quantite'] = $livraison['qnte_article'];
					$data['vente']['prix_liv'] = $livraison['prix_liv'];
					$data['vente']['id_liv'] = $livraison['id_livraison'];
					$data['vente']['prix_total'] = $livraison['qnte_article'] * $data['vente']['prix_unit'];
					
					$pay_vente = $this->payement_vente->get_record(array('id_vente' => $data['vente']['id_vente'], 'payement_vente_status' => 1));
					$paye = 0;
					$i = 0;
					foreach($pay_vente as $p_v){
						$paye += (float) $p_v['montant_paye'];
						$i++;
					}
					$data['vente']['deja'] = $paye;
					
					$achat = $this->achat->get_record(array('num_bordereau' => $data['vente']['num_bordereau']));
					$data['vente']['prix_achat'] = $data['vente']['quantite'] * $achat[0]['prix_unit'];
					
					$article = $this->article->get_record(array('id_article' => $achat[0]['id_article']));
					$data['vente']['article'] = $article[0]['nom_article'];
					
					$founisseur = $this->fournisseur->get_record(array('id_fournisseur' => $achat[0]['id_fournisseur']));
					$data['vente']['fournisseur'] = $founisseur[0]['nom_fournisseur'];
				}
				
				$_POST['bordereaul'] = $livraison['id_achat'];
				$_POST['transporteur'] = $livraison['id_livreur'];
				$_POST['qnte'] = $livraison['qnte_article'];
				$_POST['num_veh'] = $livraison['num_vehicule'];
				$_POST['lieu'] = $livraison['lieu_liv'];
				$_POST['prix_l'] = $livraison['prix_liv'];
				$_POST['datte_liv'] = $livraison['date_de_liv'];
				if($livraison['date_de_liv'] != null){
					$_POST['livrais'] = 1;
				}else{
					$_POST['livrais'] = 2;
				}
				
				$this->form_validation->set_rules('bordereaul', 'Numéro de bordereau', '');
				$this->form_validation->set_rules('transporteur', 'Transporteur', '');
				$this->form_validation->set_rules('qnte', 'Quantité à transporter', '');
				$this->form_validation->set_rules('num_veh', 'Numéro du véhicule', 'trim');
				$this->form_validation->set_rules('lieu', 'Lieu de livraison', 'trim');
				$this->form_validation->set_rules('prix_l', 'Prix total du transport', '');
				$this->form_validation->set_rules('datte_liv', 'Date de livraison', '');
				$this->form_validation->set_rules('livrais', 'Date de livraison', '');
				
				$this->form_validation->run();
				
				$data['achats'] = $this->achat->get_record();
				$articles = $this->article->get_record();
				$fournisseurs = $this->fournisseur->get_record();
				foreach($data['achats'] as $cle => $ach){
					foreach($articles as $art){
						if($ach['id_article'] == $art['id_article']){
							$data['achats'][$cle]['article'] = $art['nom_article'];
						}
					}
					foreach($fournisseurs as $fou){
						if($ach['id_fournisseur'] == $fou['id_fournisseur']){
							$data['achats'][$cle]['fournisseur'] = $fou['nom_fournisseur'];
						}
					}
				}
				$data['livreurs'] = $this->livreur->get_record();
				$data['id_livraison'] = $id_liv;
				$data['active'] = 3;
				$this->template->view('une_livraison', $data);
			}else{
				header('Location: liste_livraison');
			}
		}else{
			header('Location: liste_livraison');
		}
	}
	
	public function modifier_livaison(){
		$this->add_css_js1();
		
		if(isset($_GET['liv'])){
			$id_liv = $_GET['liv'];
			$livraison = $this->livraison->get_record(array('id_livraison' => $id_liv, 'livraison_status' => 1));
			if(!empty($livraison)){
				//on verifie si on supprime et on le fait
				if(isset($_POST['supprimer']) and $_POST['supprimer'] == 'oui'){
					$acht = $this->achat->get_record(array('num_bordereau' => $livraison[0]['id_achat']));
					//on reevalu la qentité restante
					$this->achat->update_record(array('qnt_rest' => $livraison[0]['qnte_article']+$acht[0]['qnt_rest']), array('num_bordereau' => $livraison[0]['id_achat']));
					$this->livraison->delete_row(array('id_livraison' => $id_liv));
					$vente = $this->vente->get_record(array('id_livraison' => $id_liv));
					$this->vente->delete_row(array('id_livraison' => $id_liv));
					if(!empty($vente)){
						foreach($vente as $vent){
							$this->payement_vente->delete_row(array('id_vente' => $vent['id_vente']));
						}
					}
					header('Location: liste_livraison');
				}
				
				$livraison = $livraison[0];
				
				//si in veut modifier
				if(isset($_POST['qnte'])){
					$this->form_validation->set_rules('bordereaul', 'Numéro de bordereau', '');
					$this->form_validation->set_rules('transporteur', 'Transporteur', 'trim|required|callback_transporteur_check');
					$this->form_validation->set_rules('qnte', 'Quantité à transporter', 'trim|required|callback_qnte_check');
					$this->form_validation->set_rules('num_veh', 'Numéro du véhicule', 'trim');
					$this->form_validation->set_rules('prix_l', 'Prix total du transport', 'trim|required|numeric');
					$this->form_validation->set_rules('livrais', 'Livraison', 'trim|required');
					$this->form_validation->set_rules('datte_liv', 'Date de livraison', 'trim|callback_datte_liv_check');

					if ($this->form_validation->run()){
						$data['qnte_article'] = $_POST['qnte'];
						$data['id_livreur'] = $_POST['transporteur'];
						$data['num_vehicule'] = $_POST['num_veh'];
						$data['prix_liv'] = $_POST['prix_l'];
						if(!empty($_POST['datte_liv']) and $_POST['livrais'] == 1){
							$data['date_de_liv'] = $_POST['datte_liv'];
						}else if($_POST['livrais'] == 1){
							$data['date_de_liv'] = date('Y-m-d');
						}else{
							$data['date_de_liv'] = null;
						}
						
						$this->vente->update_record(array('date_vente' => $data['date_de_liv']), array('id_livraison' => $id_liv));
						
						//on reévalue la quantité darticle restante
						$achat = $this->achat->get_record(array('num_bordereau' => $livraison['id_achat']));
						$nve_qnte_rest = $achat[0]['qnt_rest'] + $livraison['qnte_article'] - $data['qnte_article'];
						$this->achat->update_record(array('qnt_rest' => $nve_qnte_rest), array('num_bordereau' => $livraison['id_achat']));
						
						$this->livraison->update_record($data, array('id_livraison' => $id_liv));
						
						header('Location: une_livraison?liv='.$id_liv);
					}
				}else{
					$_POST['bordereaul'] = $livraison['id_achat'];
					$_POST['transporteur'] = $livraison['id_livreur'];
					$_POST['qnte'] = $livraison['qnte_article'];
					$_POST['num_veh'] = $livraison['num_vehicule'];
					$_POST['prix_l'] = $livraison['prix_liv'];
					$_POST['datte_liv'] = $livraison['date_de_liv'];
					if($livraison['date_de_liv'] != null){
						$_POST['livrais'] = 1;
					}else{
						$_POST['livrais'] = 2;
					}
					
					$this->form_validation->set_rules('bordereaul', 'Numéro de bordereau', '');
					$this->form_validation->set_rules('transporteur', 'Transporteur', '');
					$this->form_validation->set_rules('qnte', 'Quantité à transporter', '');
					$this->form_validation->set_rules('num_veh', 'Numéro du véhicule', '');
					$this->form_validation->set_rules('prix_l', 'Prix total du transport', '');
					$this->form_validation->set_rules('datte_liv', 'Date de livraison', '');
					$this->form_validation->set_rules('livrais', 'Date de livraison', '');
					
					$this->form_validation->run();
				}

				$data['livreurs'] = $this->livreur->get_record();
				$data['id_livraison'] = $id_liv;
				$data['active'] = 3;
				$this->template->view('modifier_livaison', $data);
			}else{
				header('Location: liste_livraison');
			}
		}else{
			header('Location: liste_livraison');
		}
	}
	
	public function une_vente(){
		if(isset($_GET['ven'])){
			$id_vente = $_GET['ven'];
			$vente = $this->vente->get_record(array('id_vente' => $id_vente, 'vente_status' => 1));
			if(!empty($vente)){
				//on verifie si on supprime et on le fait
				if(isset($_POST['supprimer']) and $_POST['supprimer'] == 'oui'){
					$this->vente->delete_row(array('id_vente' => $id_vente));
					$this->payement_vente->delete_row(array('id_vente' => $id_vente));
					header('Location: liste_vente');
				}
				
				$vente = $vente[0];
				$client = $this->client->get_record(array('id_client' => $vente['id_client']));
				$vente['client'] = $client[0]['nom_client'];
				$livraison = $this->livraison->get_record(array('id_livraison' => $vente['id_livraison'], 'livraison_status' => 1));
				if(!empty($livraison)){
					$vente['prix_liv'] = $livraison[0]['prix_liv'];
					$vente['date_liv'] = $livraison[0]['date_de_liv'];
					$vente['quantite'] = $livraison[0]['qnte_article'];
					$vente['date_liv'] = $livraison[0]['date_de_liv'];
					$vente['lieu_liv'] = $livraison[0]['lieu_liv'];
					$vente['vehicule'] = $livraison[0]['num_vehicule'];
					$vente['id_liv'] = $livraison[0]['id_livraison'];
					$vente['prix_total'] = $livraison[0]['qnte_article'] * $vente['prix_unit'];
					$livreur = $this->livreur->get_record(array('id_livreur' => $livraison[0]['id_livreur']));
					if(!empty($livreur)){
						$vente['livreur'] = $livreur[0]['nom_livreur'];
					}else{
						$vente['livreur'] = 'Pas de livraison';
					}
				}
				
				$pay_vente = $this->payement_vente->get_record(array('id_vente' => $id_vente, 'payement_vente_status' => 1));
				$paye = 0;
				$i = 0;
				foreach($pay_vente as $p_v){
					$paye += (float) $p_v['montant_paye'];
					$vente['payement'][$i]['montant'] = $p_v['montant_paye'];
					$vente['payement'][$i]['date'] = $p_v['date_payement'];
					$i++;
				}
				$vente['deja'] = $paye;
				
				//on verifi si tout a été payé
				if($vente['deja'] - $vente['prix_total'] == 0){
					$vente['etat_payement'] = 1;
				}else{
					$vente['etat_payement'] = 0;
				}

				$achat = $this->achat->get_record(array('num_bordereau' => $vente['num_bordereau']));
				$vente['prix_achat'] = (float)$achat[0]['prix_unit'] * (float)$vente['quantite'];
				$article = $this->article->get_record(array('id_article' => $achat[0]['id_article']));
				$fournisseur = $this->fournisseur->get_record(array('id_fournisseur' => $achat[0]['id_fournisseur']));
				$vente['article'] = $article[0]['nom_article'];
				$vente['fournisseur'] = $fournisseur[0]['nom_fournisseur'];
				
				$data['vente'] = $vente;
				$data['active'] = 2;
				$this->template->view('une_vente', $data);
			}else{
				header('Location: liste_vente');
			}
		}else{
			header('Location: liste_vente');
		}
	}

	public function modifier_vente(){
		$this->add_css_js1();
		
		if(isset($_GET['ven'])){
			$id_livraison = $_GET['ven'];
			$livraison = $this->livraison->get_record(array('id_livraison' => $id_livraison));
			if(!empty($livraison)){
				$livraison  = $livraison[0];
				$vente = $this->vente->get_record(array('id_livraison' => $id_livraison));
				$vente  = $vente[0];
				
				if(empty($_POST['num_bordereau'])){
					$_POST['client'] = $vente['id_client'];
					$_POST['prix_u'] = $vente['prix_unit'];
					$_POST['prix_t'] = $vente['prix_unit'] * $livraison['qnte_article'];
					
				}
				
				$_POST['livraison'] = $livraison['id_livraison'];
				
				$this->form_validation->set_rules('client', 'Client', 'required|callback_client_check');
				$this->form_validation->set_rules('prix_u', 'Prix unitaire', 'trim|required');
				$this->form_validation->set_rules('prix_t', 'Prix Total de vente', 'required|callback_prix_t_check');

				if ($this->form_validation->run() == TRUE and !empty($_POST['num_bordereau'])){
					$data['id_client'] = $_POST['client'];
					$data['prix_unit'] = $_POST['prix_u'];
					
					$this->vente->update_record($data, array('id_vente' => $vente['id_vente']));
					
					header('Location: une_vente?ven='.$vente['id_vente'] );
				}
				
				$vente['qnte_article'] = $livraison['qnte_article'];
				$vente['prix_liv'] = $livraison['prix_liv'];
				
				$achat = $this->achat->get_recordAll();
				$article = $this->article->get_recordAll();
				$livreur = $this->livreur->get_recordAll();
				$data['livraison'] = $this->livraison->get_record();
				$data['clients'] = $this->client->get_record();
						
				foreach($achat as $ach){
					if($ach['num_bordereau'] == $vente['num_bordereau']){
						foreach($article as $art){
							if($art['id_article'] == $ach['id_article']){
								$vente['nom_article'] = $art['nom_article'];
							}
						}
					}
				}
				
				$vente['livreur'] = 'pas de livraison';
				foreach($livreur as $liv){
					if($liv['id_livreur'] == $livraison['id_livreur']){
						$vente['livreur'] = $liv['nom_livreur'];
					}
				}
				
				$data['vente'] = $vente;
				$data['active'] = 2;
				$this->template->view('modif_vente', $data);
			}else{
				header('Location: liste_vente');
			}
		}else{
			header('Location: liste_vente');
		}
	}
	
	public function chercher(){
		$this->template->add_css('touchspin/jquery.bootstrap-touchspin.min');
		$this->template->add_css('datapicker/datepicker3');
		//$this->template->add_css('form/themesaller-forms');
		$this->template->add_css('colorpicker/colorpicker');
		$this->template->add_css('select2/select2.min');
		$this->template->add_css('chosen/bootstrap-chosen');
		$this->template->add_css('ionRangeSlider/ion.rangeSlider');
		$this->template->add_css('ionRangeSlider/ion.rangeSlider.skinFlat');
		$this->template->add_css('editor/select2');
		$this->template->add_css('editor/datetimepicker');
		$this->template->add_css('editor/bootstrap-editable');
		$this->template->add_css('editor/x-editor-style');
		$this->template->add_css('data-table/bootstrap-table');
		$this->template->add_css('data-table/bootstrap-editable');
		$this->template->add_css('beta');
		
		$this->template->add_js('touchspin/jquery.bootstrap-touchspin.min');
		$this->template->add_js('touchspin/touchspin-active');
		$this->template->add_js('colorpicker/jquery.spectrum.min');
		$this->template->add_js('colorpicker/color-picker-active');
		$this->template->add_js('datapicker/bootstrap-datepicker');
		$this->template->add_js('datapicker/datepicker-active');
		$this->template->add_js('input-mask/jasny-bootstrap.min');
		$this->template->add_js('chosen/chosen.jquery');
		$this->template->add_js('chosen/chosen-active');
		$this->template->add_js('select2/select2.full.min');
		$this->template->add_js('select2/select2-active');
		$this->template->add_js('ionRangeSlider/ion.rangeSlider.min');
		$this->template->add_js('ionRangeSlider/ion.rangeSlider.active');
		$this->template->add_js('rangle-slider/jquery-ui-1.10.4.custom.min');
		$this->template->add_js('rangle-slider/jquery-ui-touch-punch.min');
		$this->template->add_js('rangle-slider/rangle-active');
		$this->template->add_js('knob/jquery.knob');
		$this->template->add_js('knob/knob-active');
		$this->template->add_js('data-table/bootstrap-table');
		$this->template->add_js('data-table/tableExport');
		$this->template->add_js('data-table/data-table-active');
		$this->template->add_js('data-table/bootstrap-table-editable');
		$this->template->add_js('data-table/bootstrap-editable');
		$this->template->add_js('data-table/bootstrap-table-resizable');
		$this->template->add_js('data-table/colResizable-1.5.source');
		$this->template->add_js('data-table/bootstrap-table-export');
		$this->template->add_js('editable/jquery.mockjax');
		$this->template->add_js('editable/mock-active');
		$this->template->add_js('editable/select2');
		$this->template->add_js('editable/moment.min');
		$this->template->add_js('editable/bootstrap-datetimepicker');
		$this->template->add_js('editable/bootstrap-editable');
		$this->template->add_js('editable/xediable-active');
		$this->template->add_js('chart/jquery.peity.min');
		$this->template->add_js('peity/peity-active');
		$this->template->add_js('tab');
		
		$this->template->add_js('chosen/chosen.jquery');
		$this->template->add_js('chosen/chosen-active');
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		if(isset($_POST['search'])){
			if(!empty($_POST['search'])){
					$id_achat = $_POST['search'];
					$achat = $this->achat->get_record(array('num_bordereau' => $id_achat, 'achat_status' => 1));
					if(!empty($achat)){
						//on verifie si on supprime et on le fait
						if(isset($_POST['supprimer']) and $_POST['supprimer'] == 'oui'){
							$this->achat->delete_row(array('num_bordereau' => $id_achat));
							$this->payement_achat->delete_row(array('id_achat' => $id_achat));
							$this->livraison->delete_row(array('id_achat' => $id_achat));
							$vente = $this->vente->get_record(array('num_bordereau' => $id_achat));
							$this->vente->delete_row(array('num_bordereau' => $id_achat));
							if(!empty($vente)){
								foreach($vente as $ven){
									$this->payement_vente->delete_row(array('id_vente' => $ven['id_vente']));
								}
							}
							header('Location: home');
						}
						
						$achat = $achat[0];
						$pay_achat = $this->payement_achat->get_record(array('id_achat' => $id_achat, 'payement_achat_status' => 1));
						$paye = 0;
						$i = 0;
						foreach($pay_achat as $p_a){
							$paye += (float) $p_a['montant_paye'];
							$achat['payement'][$i]['montant'] = $p_a['montant_paye'];
							$achat['payement'][$i]['date'] = $p_a['date_payement'];
							$i++;
						}
						$achat['deja'] = $paye;
						$achat['prix_total'] = $achat['prix_unit'] * $achat['quantite'];
						if($achat['deja'] - $achat['prix_total'] == 0){
							$achat['etat_payement'] = 1;
						}else{
							$achat['etat_payement'] = 0;
						}
						$article = $this->article->get_record(array('id_article' => $achat['id_article']));
						$fournisseur = $this->fournisseur->get_record(array('id_fournisseur' => $achat['id_fournisseur']));
						$achat['article'] = $article[0]['nom_article'];
						$achat['fournisseur'] = $fournisseur[0]['nom_fournisseur'];
						
						$data['achat'] = $achat;
						
						//le transport
						$livraisons = $this->livraison->get_record(array('id_achat' => $id_achat, 'livraison_status' => 1));
						$articles = $this->article->get_recordAll();
						$fournisseurs = $this->fournisseur->get_recordAll();
						$livreurs = $this->livreur->get_recordAll();
						$transport = [];
						foreach($livraisons as $cle => $liv){
							$transport[$cle] = $liv;
							$transport[$cle]['article'] = $achat['article'];
							$transport[$cle]['fournisseur'] = $achat['fournisseur'];
											
							$transport[$cle]['livreur'] = 'Pas de livraison';
							foreach($livreurs as $li){
								if($liv['id_livreur'] == $li['id_livreur']){
									$transport[$cle]['livreur'] = $li['nom_livreur'];
								}
							}
							
							//on verifie sil est associé à une vente
							$vente = $this->vente->get_record(array('id_livraison' => $liv['id_livraison']));
							if(!empty($vente)){
								$transport[$cle]['vente'] = true;
							}else{
								$transport[$cle]['vente'] = false;
							}
						}
						if(!empty($transport)){
							$columns = [];
							foreach($transport as $liv){
								$columns[] = $liv['date_liv'];
							}
							array_multisort($columns, SORT_DESC, $transport);
							$data['livraisons'] = $transport;
						}else{
							$data['message_t'] = 'Ce bordereau ne correspont à aucun transport';
						}
						
						//on cherche les ventes
						$data['ventes'] = $this->vente->get_joind('livraison', 'livraison.id_livraison', 'vente.id_livraison', array('num_bordereau' => $id_achat));
						$client = $this->client->get_recordAll();
						$pp = $this->payement_vente->get_record();
						foreach($data['ventes'] as $cle => $ven){
							foreach($livraisons as $liv){
								if($liv['id_livraison'] == $ven['id_livraison']){
									$data['ventes'][$cle]['livraison'] = $liv['prix_liv'];
									$data['ventes'][$cle]['quantite'] = $liv['qnte_article'];
									$data['ventes'][$cle]['prix_liv'] = $liv['prix_liv'];
								}
							}
							
							$data['ventes'][$cle]['article'] = $achat['article'];
							$data['ventes'][$cle]['fournisseur'] = $achat['fournisseur'];
							$data['ventes'][$cle]['prix_achat'] = (float)$data['ventes'][$cle]['quantite'] * (float)$achat['prix_unit'];
							
							foreach($client as $cli){
								if($ven['id_client'] == $cli['id_client']){
									$data['ventes'][$cle]['client'] = $cli['nom_client'];
								}
							}
							
							$sss = 0;
							foreach($pp as $p){
								if($p['id_vente'] == $ven['id_vente']){
									$sss += (float) $p['montant_paye'];
								}
							}
							$data['ventes'][$cle]['prix_total'] = $ven['prix_unit'] * $ven['qnte_article'];
							$ven['prix_total'] = $ven['prix_unit'] * $ven['qnte_article'];
							$data['ventes'][$cle]['reste'] = $sss - (float) $ven['prix_total'];
							if($data['ventes'][$cle]['reste'] == 0){
								$data['ventes'][$cle]['etat_payement'] = 1;
							}else{
								$data['ventes'][$cle]['etat_payement'] = 0;
							}
						}
						if(empty($data['ventes'])){
							$data['message_v'] = 'Ce bordereau n\'a pas encore été vendu';
						}
						
					}else{
						$data['message'] = 'Ce bordereau n\'existe pas, veillez saisir un numéro de bordereau valide';
					}
					$this->template->view('rechrche', $data);
			}else{
				header('Location: home');
			}
		}else{
			header('Location: home');
		}
	}

	public function depot_fournisseur(){
		$this->add_css_js1();
		$this->template->add_css('beta');
		
		$this->form_validation->set_rules('fournisseur', 'Fournisseur', 'trim|required|callback_fournisseur_check');
		$this->form_validation->set_rules('versement', 'Versemment', 'trim|required');
		$this->form_validation->set_rules('comentaire', 'Commentaire', 'trim');
		$this->form_validation->set_rules('datte', 'Date de versement', 'trim');

		if ($this->form_validation->run() == TRUE){
			$data['versement'] = $_POST['versement'];
			$data['id_fournisseur'] = $_POST['fournisseur'];
			$data['commentaire'] = $_POST['comentaire'];
			$data['type_versement'] = 1;
			if(!empty($_POST['datte'])){
				$data['date_banque_fournisseur'] = $_POST['datte'];
			}else{
				$data['date_banque_fournisseur'] = date('Y-m-d');
			}
			
			$this->banque_fournisseur->add_record($data);
			
			header('Location: solde_un_fournisseur?four='.$_POST['fournisseur']);
		}
		
		$data['fournisseur'] = $this->fournisseur->get_record();
		$columns = [];
		foreach($data['fournisseur'] as $ach){
			$columns[] = $ach['nom_fournisseur'];
		}
		array_multisort($columns, SORT_ASC, $data['fournisseur']);
		
		$data['active'] = 5;
		$this->template->view('depot_fournisseur', $data);
	}
	
	public function retrait_fournisseur(){
		$this->add_css_js1();
		$this->template->add_css('beta');
		
		$this->form_validation->set_rules('fournisseur', 'Fournisseur', 'trim|required|callback_fournisseur_check');
		$this->form_validation->set_rules('versement', 'Retrait', 'trim|required');
		$this->form_validation->set_rules('comentaire', 'Commentaire', 'trim');
		$this->form_validation->set_rules('datte', 'Date de retrait', 'trim');

		if ($this->form_validation->run() == TRUE){
			$data['versement'] = $_POST['versement'];
			$data['id_fournisseur'] = $_POST['fournisseur'];
			$data['commentaire'] = $_POST['comentaire'];
			$data['type_versement'] = 0;
			if(!empty($_POST['datte'])){
				$data['date_banque_fournisseur'] = $_POST['datte'];
			}else{
				$data['date_banque_fournisseur'] = date('Y-m-d');
			}
			
			$this->banque_fournisseur->add_record($data);
			
			header('Location: solde_un_fournisseur?four='.$_POST['fournisseur']);
		}
		
		$data['fournisseur'] = $this->fournisseur->get_record();
		$columns = [];
		foreach($data['fournisseur'] as $ach){
			$columns[] = $ach['nom_fournisseur'];
		}
		array_multisort($columns, SORT_ASC, $data['fournisseur']);
		
		$data['active'] = 5;
		$this->template->view('retrait_fournisseur', $data);
	}
	
	public function payer_fournisseur(){
		$this->add_css_js1();
		$this->template->add_css('beta');
		
		$this->form_validation->set_rules('fournisseur', 'Fournisseur', 'trim|required|callback_fournisseur_check');
		$this->form_validation->set_rules('versement', 'Retrait', 'trim|required');
		$this->form_validation->set_rules('comentaire', 'Commentaire', 'trim');
		$this->form_validation->set_rules('datte', 'Date de payement', 'trim|required');

		if ($this->form_validation->run() == TRUE){
			$data['versement'] = $_POST['versement'];
			$data['id_fournisseur'] = $_POST['fournisseur'];
			$data['commentaire'] = $_POST['comentaire'];
			$data['type_versement'] = 1;
			if(!empty($_POST['datte'])){
				$data['date_banque_fournisseur'] = $_POST['datte'];
			}else{
				$data['date_banque_fournisseur'] = date('Y-m-d');
			}
			
			$this->banque_fournisseur->add_record($data);
			
			header('Location: solde_un_fournisseur?four='.$_POST['fournisseur']);
		}
		
		$data['fournisseur'] = $this->fournisseur->get_record();
		$columns = [];
		foreach($data['fournisseur'] as $ach){
			$columns[] = $ach['nom_fournisseur'];
		}
		array_multisort($columns, SORT_ASC, $data['fournisseur']);
		
		$data['active'] = 5;
		$this->template->view('payer_fournisseur', $data);
	}
	
	public function modif_pay_four(){
		$this->add_css_js1();
		$this->template->add_css('beta');
		
		if(isset($_GET['pay'])){
			$pay = $this->banque_fournisseur->get_record(array('id_banque_fournisseur' => $_GET['pay']));
			
			if(!empty($pay)){
				if(isset($_POST['supprimer'])){
					$this->banque_fournisseur->delete_row(array('id_banque_fournisseur' => $pay[0]['id_banque_fournisseur']));
					header('Location: solde_un_fournisseur?four='.$pay[0]['id_fournisseur']);
				}
				
				$verif = true;
				if(!isset($_POST['fournisseur'])){
					$_POST['fournisseur'] = $pay[0]['id_fournisseur'];
					$_POST['versement'] = $pay[0]['versement'];
					$_POST['comentaire'] = $pay[0]['commentaire'];
					$_POST['datte'] = $pay[0]['date_banque_fournisseur'];
					$verif = false;
				}
				
				$this->form_validation->set_rules('fournisseur', 'Fournisseur', '');
				$this->form_validation->set_rules('versement', 'Retrait', 'trim|required');
				$this->form_validation->set_rules('comentaire', 'Commentaire', 'trim');
				$this->form_validation->set_rules('datte', 'Date de payement', 'trim|required');

				if ($this->form_validation->run() and $verif){
					$data['versement'] = $_POST['versement'];
					$data['commentaire'] = $_POST['comentaire'];
					if(!empty($_POST['datte'])){
						$data['date_banque_fournisseur'] = $_POST['datte'];
					}else{
						$data['date_banque_fournisseur'] = date('Y-m-d');
					}
					
					$this->banque_fournisseur->update_record($data, array('id_banque_fournisseur' => $pay[0]['id_banque_fournisseur']));
					
					header('Location: solde_un_fournisseur?four='.$_POST['fournisseur']);
				}
				
				$data['fournisseur'] = $this->fournisseur->get_record();
				$columns = [];
				foreach($data['fournisseur'] as $ach){
					$columns[] = $ach['nom_fournisseur'];
				}
				array_multisort($columns, SORT_ASC, $data['fournisseur']);
				
				$data['active'] = 5;
				$this->template->view('modif_pay_four', $data);
			}else{
				header('Location: liste_credit');
			}
		}else{
			header('Location: liste_credit');
		}
	}
	
	public function modifier_pay_client(){
		$this->add_css_js1();
		$this->template->add_css('beta');
		
		if(isset($_GET['pay'])){
			$pay = $this->banque_client->get_record(array('id_banque_client' => $_GET['pay']));
			
			if(!empty($pay)){
				if(isset($_POST['supprimer'])){
					$this->banque_client->delete_row(array('id_banque_client' => $pay[0]['id_banque_client']));
					header('Location: solde_un_client?cli='.$pay[0]['id_client']);
				}
				
				$verif = true;
				if(!isset($_POST['client'])){
					$_POST['client'] = $pay[0]['id_client'];
					$_POST['versement'] = $pay[0]['somme'];
					$_POST['comentaire'] = $pay[0]['commentaire'];
					$_POST['datte'] = $pay[0]['date_banque_client'];
					$verif = false;
				}
				
				$this->form_validation->set_rules('client', 'Client', '');
				$this->form_validation->set_rules('versement', 'versement', 'trim|required');
				$this->form_validation->set_rules('comentaire', 'Commentaire', 'trim');
				$this->form_validation->set_rules('datte', 'Date de payement', 'trim|required');

				if ($this->form_validation->run() and $verif){
					$data['somme'] = $_POST['versement'];
					$data['commentaire'] = $_POST['comentaire'];
					if(!empty($_POST['datte'])){
						$data['date_banque_client'] = $_POST['datte'];
					}else{
						$data['date_banque_client'] = date('Y-m-d');
					}
					
					$this->banque_client->update_record($data, array('id_banque_client' => $pay[0]['id_banque_client']));
					
					header('Location: solde_un_client?cli='.$_POST['client']);
				}
				
				$data['clients'] = $this->client->get_record();
				$columns = [];
				foreach($data['clients'] as $ach){
					$columns[] = $ach['nom_client'];
				}
				array_multisort($columns, SORT_ASC, $data['clients']);
				
				$data['active'] = 6;
				$this->template->view('modifier_pay_client', $data);
			}else{
				header('Location: liste_credit');
			}
		}else{
			header('Location: liste_credit');
		}
	}
	
	public function modifier_ret_client(){
		$this->add_css_js1();
		$this->template->add_css('beta');
		
		if(isset($_GET['pay'])){
			$pay = $this->banque_client->get_record(array('id_banque_client' => $_GET['pay']));
			
			if(!empty($pay)){
				if(isset($_POST['supprimer'])){
					$this->banque_client->delete_row(array('id_banque_client' => $pay[0]['id_banque_client']));
					header('Location: solde_un_client?cli='.$pay[0]['id_client']);
				}
				
				$verif = true;
				if(!isset($_POST['client'])){
					$_POST['client'] = $pay[0]['id_client'];
					$_POST['versement'] = $pay[0]['somme'];
					$_POST['comentaire'] = $pay[0]['commentaire'];
					$_POST['datte'] = $pay[0]['date_banque_client'];
					$verif = false;
				}
				
				$this->form_validation->set_rules('client', 'Client', '');
				$this->form_validation->set_rules('versement', 'versement', 'trim|required');
				$this->form_validation->set_rules('comentaire', 'Commentaire', 'trim');
				$this->form_validation->set_rules('datte', 'Date de payement', 'trim|required');

				if ($this->form_validation->run() and $verif){
					$data['somme'] = $_POST['versement'];
					$data['commentaire'] = $_POST['comentaire'];
					if(!empty($_POST['datte'])){
						$data['date_banque_client'] = $_POST['datte'];
					}else{
						$data['date_banque_client'] = date('Y-m-d');
					}
					
					$this->banque_client->update_record($data, array('id_banque_client' => $pay[0]['id_banque_client']));
					
					header('Location: solde_un_client?cli='.$_POST['client']);
				}
				
				$data['clients'] = $this->client->get_record();
				$columns = [];
				foreach($data['clients'] as $ach){
					$columns[] = $ach['nom_client'];
				}
				array_multisort($columns, SORT_ASC, $data['clients']);
				
				$data['active'] = 6;
				$this->template->view('modifier_ret_client', $data);
			}else{
				header('Location: liste_credit');
			}
		}else{
			header('Location: liste_credit');
		}
	}
	
	public function depot_client(){
		$this->add_css_js1();
		$this->template->add_css('beta');
		
		$this->form_validation->set_rules('client', 'Client', 'trim|required|callback_client_check');
		$this->form_validation->set_rules('versement', 'Versemment', 'trim|required');
		$this->form_validation->set_rules('comentaire', 'Commentaire', 'trim');
		$this->form_validation->set_rules('datte', 'Date de versement', 'trim');

		if ($this->form_validation->run() == TRUE){
			$data['somme'] = $_POST['versement'];
			$data['id_client'] = $_POST['client'];
			$data['commentaire'] = $_POST['comentaire'];
			$data['type_versement'] = 1;
			if(!empty($_POST['datte'])){
				$data['date_banque_client'] = $_POST['datte'];
			}else{
				$data['date_banque_client'] = date('Y-m-d');
			}
			
			$this->banque_client->add_record($data);
			
			header('Location: solde_un_client?cli='.$_POST['client']);
		}
		
		$data['clients'] = $this->client->get_record();
		$columns = [];
		foreach($data['clients'] as $ach){
			$columns[] = $ach['nom_client'];
		}
		array_multisort($columns, SORT_ASC, $data['clients']);
		
		$data['active'] = 5;
		$this->template->view('depot_client', $data);
	}
	
	public function perte(){
		$this->add_css_js1();
		
		$this->form_validation->set_rules('employe', 'Employé', 'trim|required|callback_employe_check');
		$this->form_validation->set_rules('perte', 'Perte', 'trim|required');
		$this->form_validation->set_rules('comentaire', 'Commentaire', 'trim');
		$this->form_validation->set_rules('datte', 'Date de versement', 'trim|required');

		if ($this->form_validation->run() == TRUE){
			$data['perte'] = $_POST['perte'];
			$data['id_employe'] = $_POST['employe'];
			$data['commentaire'] = $_POST['comentaire'];
			if(!empty($_POST['datte'])){
				$data['date_perte'] = $_POST['datte'];
			}else{
				$data['date_perte'] = date('Y-m-d');
			}
			
			$this->perte->add_record($data);
			
			header('Location: perte_un_employe?emp='.$_POST['employe']);
		}
		
		$data['employe'] = $this->employe->get_record();
		$columns = [];
		foreach($data['employe'] as $ach){
			$columns[] = $ach['nom_employe'];
		}
		array_multisort($columns, SORT_ASC, $data['employe']);
		
		$data['active'] = 7;
		$this->template->view('perte', $data);
	}
	
	public function modifier_perte(){
		$this->add_css_js1();
		if(isset($_GET['pert'])){
			$perte = $this->perte->get_record(array('id_perte' => $_GET['pert']));
			if(!empty($perte)){
				if(isset($_POST['supprimer'])){
					$this->perte->delete_row(array('id_perte' => $perte[0]['id_perte']));
					header('Location: perte_un_employe?emp='.$perte[0]['id_employe']);
				}
				
				$verif = true;
				if(!isset($_POST['verif'])){
					$_POST['employe'] = $perte[0]['id_employe'];
					$_POST['datte'] = $perte[0]['date_perte'];
					$_POST['perte'] = $perte[0]['perte'];
					$_POST['comentaire'] = $perte[0]['commentaire'];
					$verif = false;
				}
				
				$this->form_validation->set_rules('employe', 'Employé', '');
				$this->form_validation->set_rules('perte', 'Perte', 'trim|required');
				$this->form_validation->set_rules('comentaire', 'Commentaire', 'trim');
				$this->form_validation->set_rules('datte', 'Date de versement', 'trim|required');
					
				if ($this->form_validation->run() and $verif){
					$data['perte'] = $_POST['perte'];
					$data['commentaire'] = $_POST['comentaire'];
					if(!empty($_POST['datte'])){
						$data['date_perte'] = $_POST['datte'];
					}else{
						$data['date_perte'] = date('Y-m-d');
					}
					
					$this->perte->update_record($data, array('id_perte' => $_GET['pert']));
					
					header('Location: perte_un_employe?emp='.$perte[0]['id_employe']);
				}
				
				$data['employe'] = $this->employe->get_record();
				$columns = [];
				foreach($data['employe'] as $ach){
					$columns[] = $ach['nom_employe'];
				}
				array_multisort($columns, SORT_ASC, $data['employe']);
				
				$data['active'] = 7;
				$this->template->view('modifier_perte', $data);
			}else{
				header('Location: perte_employe');
			}
		}else{
			header('Location: perte_employe');
		}
	}
	
	public function payer_salaire(){
		$this->add_css_js2();
		
		$perte = $this->perte->get_record();
		$employe = $this->employe->get_record();
		$result = [];
		
		$mois = $this->payer_salaire->get_record();
		
		if(empty($mois)){
			$mois = date('Y-m-0');
			$mois2 = 'Mai 2019';
		}else{
			$a = $mois[count($mois) - 1]['mois_salaire'];
			$b = explode('-',$a);
			$c = $b[1].'/1/'.$b[0];
			$time = strtotime($c);
			$mois = date('Y-m-0', strtotime('+1 month', $time));

			$mois2 = af_date_date('1-'.$b[0].'-'.$b[1], 1);
		}
		
		foreach($employe as $emp){
			$result[$emp['id_employe']] = $emp;
			$result[$emp['id_employe']]['perte'] = 0;
			$result[$emp['id_employe']]['id_perte'] = [];
			foreach($perte as $per){
				if($per['id_employe'] == $emp['id_employe']){
					$b = explode('-',$per['date_perte']);
					$c = $b[0].'-'.$b[1].'-0';
					if($c <= $mois){
						$result[$emp['id_employe']]['perte'] += $per['perte'];
						$result[$emp['id_employe']]['id_perte'][] = $per['id_perte'];
					}
				}
			}
		}
		
		if(isset($_POST['verif'])){
			$this->payer_salaire->add_record(array('mois_salaire' => $mois, 'date_payement' => date('Y-m-d')));
			$id_payer_salaire = $this->payer_salaire->get_record(array('mois_salaire' => $mois));
			foreach($result as $res){
				$this->payer_salaire_employe->add_record(array('id_payer_salaire' => $id_payer_salaire[0]['id_payer_salaire'], 'id_employe' => $res['id_employe'], 'salaire' => $res['salaire'], 'perte' => $res['perte']));
				
				if(!empty($res['id_perte'])){
					foreach($res['id_perte'] as $id_p){
						$this->perte->update_record(array('perte_status' => 2), array('id_perte' => $id_p));
					}
				}
			}
			header('Location: liste_payement_salaire');
		}
		
		$data['mois'] = $mois2;
		$data['result'] = $result;
		$data['active'] = 7;
		$this->template->view('payer_salaire', $data);
	}
	
	public function liste_payement_salaire(){
		$this->add_css_js1();
		$this->add_css_js2();
		
		$employe = $this->payer_salaire_employe->get_joind('employe', 'employe.id_employe', 'payer_salaire_employe.id_employe');
		$payer_salaire = $this->payer_salaire->get_record();
		
		$result = [];
		
		if(isset($_POST['mois']) and !empty($_POST['mois'])){
			$mois = $_POST['mois'];
		}else{
			$mois = $payer_salaire[count($payer_salaire)-1]['id_payer_salaire'];
		}
		
		foreach($employe as $emp){
			if($mois == $emp['id_payer_salaire']){
				$result[] = $emp;
			}
		}
		
		foreach($payer_salaire as $p_s){
			if($mois == $p_s['id_payer_salaire']){
				$mois2 = af_date_date($p_s['mois_salaire']);
			}
		}
		
		
		$data['mois'] = $mois;
		$data['mois2'] = $mois2;
		$data['result'] = $result;
		$data['payer_salaire'] = array_slice(array_reverse($payer_salaire), 0, 12);
		$data['active'] = 7;
		$this->template->view('liste_payement_salaire', $data);
	}
	
	public function stats_mensuel(){
		$this->add_css_js1();
		$this->add_css_js2();
		
		// achat
		$achats = $this->achat->get_joind2('fournisseur', 'article', 'achat.id_fournisseur', 'fournisseur.id_fournisseur', 'achat.id_article', 'article.id_article', array('achat.achat_status' => 1), ', achat.date_creation as date_achat');
		$data['petite_date'] = $this->chercher_petite_date($achats, 'date_achat');
		$achats = $this->un_mois($achats, 'date_achat');
		$columns = [];
		foreach($achats as $cle => $ach){
			$columns[] = $ach['date_achat'];
		}
		array_multisort($columns, SORT_ASC, $achats);
		$somme_achat = 0;
		foreach($achats as $a){
			$somme_achat += $a['prix_unit'] * $a['quantite'];
		}
		
		// transport
		$livraisons = $this->livraison->get_joind3('achat', 'article', 'livreur', 'achat.num_bordereau', 'livraison.id_achat', 'achat.id_article', 'article.id_article', 'livraison.id_livreur', 'livreur.id_livreur', array('livraison.livraison_status' => 1));
		$livraisons = $this->un_mois($livraisons, 'date_de_liv');
		$columns = [];
		foreach($livraisons as $cle => $ach){
			$columns[] = $ach['date_de_liv'];
		}
		array_multisort($columns, SORT_ASC, $livraisons);
		$somme_transport = 0;
		foreach($livraisons as $a){
			$somme_transport += $a['prix_liv'];
		}
		
		// ventes
		$ventes = $this->vente->get_joind4('achat', 'article', 'client', 'livraison', 'achat.num_bordereau', 'vente.num_bordereau', 'achat.id_article', 'article.id_article', 'client.id_client', 'vente.id_client', 'livraison.id_livraison', 'vente.id_livraison', array('vente.vente_status' => 1), ', vente.prix_unit as prix_unit_vente, achat.prix_unit as prix_unit_achat');
		$ventes = $this->un_mois($ventes, 'date_vente');
		$columns = [];
		foreach($ventes as $cle => $ach){
			$columns[] = $ach['date_vente'];
		}
		array_multisort($columns, SORT_ASC, $ventes);
		$somme_vente = 0;
		$somme_benef = 0;
		foreach($ventes as $a){
			$somme_vente += $a['prix_unit_vente'] * $a['qnte_article'];
			$somme_benef += $a['prix_unit_vente'] * $a['qnte_article'] - $a['prix_liv'] - $a['prix_unit_achat'] * $a['qnte_article'];
		}
		
		// salaires
		$salaires = $this->payer_salaire_employe->get_joind2('employe', 'payer_salaire', 'payer_salaire_employe.id_employe', 'employe.id_employe', 'payer_salaire.id_payer_salaire', 'payer_salaire_employe.id_payer_salaire');
		$salaires = $this->un_mois($salaires, 'mois_salaire');
		$somme_salaire = 0;
		foreach($salaires as $a){
			$somme_salaire += $a['salaire'] - $a['perte'];
		}
		
		$data['achats'] = $achats;
		$data['livraisons'] = $livraisons;
		$data['ventes'] = $ventes;
		$data['salaires'] = $salaires;
		$data['somme_achat'] = $somme_achat;
		$data['somme_transport'] = $somme_transport;
		$data['somme_vente'] = $somme_vente;
		$data['somme_benef'] = $somme_benef;
		$data['somme_salaire'] = $somme_salaire;
		$data['active'] = 8;
		$this->template->view('stats_mensuel', $data);
	}
	
	public function stats_annuel(){
		$this->add_css_js1();
		$this->add_css_js2();
		
		// achat
		$achats = $this->achat->get_joind2('fournisseur', 'article', 'achat.id_fournisseur', 'fournisseur.id_fournisseur', 'achat.id_article', 'article.id_article', array('achat.achat_status' => 1), ', achat.date_creation as date_achat');
		$data['petite_date'] = $this->chercher_petite_annee($achats, 'date_achat');
		$achats = $this->une_annee($achats, 'date_achat');
		$columns = [];
		foreach($achats as $cle => $ach){
			$columns[] = $ach['date_achat'];
		}
		array_multisort($columns, SORT_ASC, $achats);
		$somme_achat = 0;
		foreach($achats as $a){
			$somme_achat += $a['prix_unit'] * $a['quantite'];
		}
		
		// transport
		$livraisons = $this->livraison->get_joind3('achat', 'article', 'livreur', 'achat.num_bordereau', 'livraison.id_achat', 'achat.id_article', 'article.id_article', 'livraison.id_livreur', 'livreur.id_livreur', array('livraison.livraison_status' => 1));
		$livraisons = $this->une_annee($livraisons, 'date_de_liv');
		$columns = [];
		foreach($livraisons as $cle => $ach){
			$columns[] = $ach['date_de_liv'];
		}
		array_multisort($columns, SORT_ASC, $livraisons);
		$somme_transport = 0;
		foreach($livraisons as $a){
			$somme_transport += $a['prix_liv'];
		}
		
		// ventes
		$ventes = $this->vente->get_joind4('achat', 'article', 'client', 'livraison', 'achat.num_bordereau', 'vente.num_bordereau', 'achat.id_article', 'article.id_article', 'client.id_client', 'vente.id_client', 'livraison.id_livraison', 'vente.id_livraison', array('vente.vente_status' => 1), ', vente.prix_unit as prix_unit_vente, achat.prix_unit as prix_unit_achat');
		$ventes = $this->une_annee($ventes, 'date_vente');
		$columns = [];
		foreach($ventes as $cle => $ach){
			$columns[] = $ach['date_vente'];
		}
		array_multisort($columns, SORT_ASC, $ventes);
		$somme_vente = 0;
		$somme_benef = 0;
		foreach($ventes as $a){
			$somme_vente += $a['prix_unit_vente'] * $a['qnte_article'];
			$somme_benef += $a['prix_unit_vente'] * $a['qnte_article'] - $a['prix_liv'] - $a['prix_unit_achat'] * $a['qnte_article'];
		}
		
		// salaires
		$salaires = $this->payer_salaire_employe->get_joind2('employe', 'payer_salaire', 'payer_salaire_employe.id_employe', 'employe.id_employe', 'payer_salaire.id_payer_salaire', 'payer_salaire_employe.id_payer_salaire');
		$salaires = $this->une_annee($salaires, 'mois_salaire');
		$employes = [];
		$somme_salaire = 0;
		foreach($salaires as $a){
			$somme_salaire += $a['salaire'] - $a['perte'];
			if(isset($employes[$a['id_employe']])){
				$employes[$a['id_employe']]['salaire'] += $a['salaire']; 
				$employes[$a['id_employe']]['perte'] += $a['perte']; 
			}else{
				$employes[$a['id_employe']]['salaire'] = $a['salaire'];
				$employes[$a['id_employe']]['perte'] = $a['perte'];
				$employes[$a['id_employe']]['id_employe'] = $a['id_employe'];
				$employes[$a['id_employe']]['nom_employe'] = $a['nom_employe'];
				$employes[$a['id_employe']]['telephone_employe'] = $a['telephone_employe'];
			}
		}
		
		$data['achats'] = $achats;
		$data['livraisons'] = $livraisons;
		$data['ventes'] = $ventes;
		$data['salaires'] = $employes;
		$data['somme_achat'] = $somme_achat;
		$data['somme_transport'] = $somme_transport;
		$data['somme_vente'] = $somme_vente;
		$data['somme_benef'] = $somme_benef;
		$data['somme_salaire'] = $somme_salaire;
		$data['active'] = 8;
		$this->template->view('stats_annuel', $data);
	}
	
	public function stats_autre(){
		$this->add_css_js1();
		$this->add_css_js2();
		
		// achat
		$achats = $this->achat->get_joind2('fournisseur', 'article', 'achat.id_fournisseur', 'fournisseur.id_fournisseur', 'achat.id_article', 'article.id_article', array('achat.achat_status' => 1), ', achat.date_creation as date_achat');
		$data['petite_date'] = $this->chercher_petite_annee($achats, 'date_achat');
		$achats = $this->trie_liste($achats, 'date_achat', 1);
		$columns = [];
		foreach($achats as $cle => $ach){
			$columns[] = $ach['date_achat'];
		}
		array_multisort($columns, SORT_ASC, $achats);
		$somme_achat = 0;
		foreach($achats as $a){
			$somme_achat += $a['prix_unit'] * $a['quantite'];
		}
		
		// transport
		$livraisons = $this->livraison->get_joind3('achat', 'article', 'livreur', 'achat.num_bordereau', 'livraison.id_achat', 'achat.id_article', 'article.id_article', 'livraison.id_livreur', 'livreur.id_livreur', array('livraison.livraison_status' => 1));
		$livraisons = $this->trie_liste($livraisons, 'date_de_liv', 1);
		$columns = [];
		foreach($livraisons as $cle => $ach){
			$columns[] = $ach['date_de_liv'];
		}
		array_multisort($columns, SORT_ASC, $livraisons);
		$somme_transport = 0;
		foreach($livraisons as $a){
			$somme_transport += $a['prix_liv'];
		}
		
		// ventes
		$ventes = $this->vente->get_joind4('achat', 'article', 'client', 'livraison', 'achat.num_bordereau', 'vente.num_bordereau', 'achat.id_article', 'article.id_article', 'client.id_client', 'vente.id_client', 'livraison.id_livraison', 'vente.id_livraison', array('vente.vente_status' => 1), ', vente.prix_unit as prix_unit_vente, achat.prix_unit as prix_unit_achat');
		$ventes = $this->trie_liste($ventes, 'date_vente', 1);
		$columns = [];
		foreach($ventes as $cle => $ach){
			$columns[] = $ach['date_vente'];
		}
		array_multisort($columns, SORT_ASC, $ventes);
		$somme_vente = 0;
		$somme_benef = 0;
		foreach($ventes as $a){
			$somme_vente += $a['prix_unit_vente'] * $a['qnte_article'];
			$somme_benef += $a['prix_unit_vente'] * $a['qnte_article'] - $a['prix_liv'] - $a['prix_unit_achat'] * $a['qnte_article'];
		}
		
		// salaires
		$salaires = $this->payer_salaire_employe->get_joind2('employe', 'payer_salaire', 'payer_salaire_employe.id_employe', 'employe.id_employe', 'payer_salaire.id_payer_salaire', 'payer_salaire_employe.id_payer_salaire');
		$salaires = $this->trie_liste($salaires, 'mois_salaire', 1);
		$employes = [];
		$somme_salaire = 0;
		foreach($salaires as $a){
			$somme_salaire += $a['salaire'] - $a['perte'];
			if(isset($employes[$a['id_employe']])){
				$employes[$a['id_employe']]['salaire'] += $a['salaire']; 
				$employes[$a['id_employe']]['perte'] += $a['perte']; 
			}else{
				$employes[$a['id_employe']]['salaire'] = $a['salaire'];
				$employes[$a['id_employe']]['perte'] = $a['perte'];
				$employes[$a['id_employe']]['id_employe'] = $a['id_employe'];
				$employes[$a['id_employe']]['nom_employe'] = $a['nom_employe'];
				$employes[$a['id_employe']]['telephone_employe'] = $a['telephone_employe'];
			}
		}
		
		$data['achats'] = $achats;
		$data['livraisons'] = $livraisons;
		$data['ventes'] = $ventes;
		$data['salaires'] = $employes;
		$data['somme_achat'] = $somme_achat;
		$data['somme_transport'] = $somme_transport;
		$data['somme_vente'] = $somme_vente;
		$data['somme_benef'] = $somme_benef;
		$data['somme_salaire'] = $somme_salaire;
		$data['active'] = 8;
		$this->template->view('stats_autre', $data);
	}
	
	public function perte_employe(){
		$this->add_css_js2();
		
		$data['perte'] = $this->employe->get_record();
		
		$data['active'] = 7;
		$this->template->view('perte_employe', $data);
	}
	
	public function perte_un_employe(){
		if(isset($_GET['emp'])){
			$data['employe'] = $this->employe->get_record(array('id_employe' => $_GET['emp']));
			if(!empty($data['employe'])){
				$this->add_css_js1();
				$this->add_css_js2();
				
				$data['perte'] = $this->perte->get_joind('employe', 'perte.id_employe', 'employe.id_employe', array('perte.id_employe' => $_GET['emp']));
				$data['petite_date'] = $this->chercher_petite_date($data['perte'], 'date_perte');
				$data['perte'] = $this->un_mois($data['perte'], 'date_perte');
				
				$columns = [];
				if(!empty($data['perte'])){
					foreach($data['perte'] as $ach){
						$columns[] = $ach['date_perte'];
					}
					array_multisort($columns, SORT_ASC, $data['perte']);
				}
				
				$data['active'] = 7;
				$this->template->view('perte_un_employe', $data);
			}else{
				header('Location: perte_employe');
			}
		}else{
			header('Location: perte_employe');
		}
	}
	
	public function liste_perte_payement(){
		if(isset($_GET['emp'])){
			$data['employe'] = $this->employe->get_record(array('id_employe' => $_GET['emp']));
			if(!empty($data['employe'])){
				$this->add_css_js1();
				$this->add_css_js2();
				
				$perte = $this->perte->get_record();
				$result = [];
				$mois = $this->payer_salaire->get_record();
		
				if(empty($mois)){
					$mois = date('Y-m-0');
					$mois2 = 'Mai 2019';
				}else{
					$a = $mois[count($mois) - 1]['mois_salaire'];
					$b = explode('-',$a);
					$c = $b[1].'/1/'.$b[0];
					$time = strtotime($c);
					$mois = date('Y-m-0', strtotime('+1 month', $time));

					$mois2 = af_date_date('1-'.$b[0].'-'.$b[1], 1);
				}
		
				foreach($perte as $per){
					if($data['employe'][0]['id_employe'] == $per['id_employe']){
						$b = explode('-',$per['date_perte']);
						$c = $b[0].'-'.$b[1].'-0';
						if($c <= $mois){
							$result[] = $per;
						}
					}
				}
				
				$data['active'] = 7;
				$data['perte'] = $result;
				$data['mois'] = $mois2;
				$this->template->view('liste_perte_payement', $data);
			}else{
				header('Location: perte_employe');
			}
		}else{
			header('Location: perte_employe');
		}
	}
	
	public function retrait_client(){
		$this->add_css_js1();
		$this->template->add_css('beta');
		
		$this->form_validation->set_rules('client', 'Client', 'trim|required|callback_client_check');
		$this->form_validation->set_rules('versement', 'Retrait', 'trim|required');
		$this->form_validation->set_rules('comentaire', 'Commentaire', 'trim');
		$this->form_validation->set_rules('datte', 'Date de retrait', 'trim');

		if ($this->form_validation->run() == TRUE){
			$data['somme'] = $_POST['versement'];
			$data['id_client'] = $_POST['client'];
			$data['commentaire'] = $_POST['comentaire'];
			$data['type_versement'] = 0;
			if(!empty($_POST['datte'])){
				$data['date_banque_client'] = $_POST['datte'];
			}else{
				$data['date_banque_client'] = date('Y-m-d');
			}
			
			$this->banque_client->add_record($data);
			
			header('Location: solde_un_client?cli='.$_POST['client']);
		}
		
		$data['clients'] = $this->client->get_record();
		$columns = [];
		foreach($data['clients'] as $ach){
			$columns[] = $ach['nom_client'];
		}
		array_multisort($columns, SORT_ASC, $data['clients']);
		
		$data['active'] = 6;
		$this->template->view('retrait_client', $data);
	}
	
	public function payement_client(){
		$this->add_css_js1();
		
		$this->form_validation->set_rules('client', 'Client', 'trim|required|callback_client_check');
		$this->form_validation->set_rules('versement', 'Versement', 'trim|required');
		$this->form_validation->set_rules('comentaire', 'Commentaire', 'trim');
		$this->form_validation->set_rules('datte', 'Date de payement', 'trim|required');

		if ($this->form_validation->run() == TRUE){
			$data['somme'] = $_POST['versement'];
			$data['id_client'] = $_POST['client'];
			$data['commentaire'] = $_POST['comentaire'];
			$data['type_versement'] = 1;
			if(!empty($_POST['datte'])){
				$data['date_banque_client'] = $_POST['datte'];
			}else{
				$data['date_banque_client'] = date('Y-m-d');
			}
			
			$this->banque_client->add_record($data);
			
			header('Location: solde_un_client?cli='.$_POST['client']);
		}
		
		$data['clients'] = $this->client->get_record();
		$columns = [];
		foreach($data['clients'] as $ach){
			$columns[] = $ach['nom_client'];
		}
		array_multisort($columns, SORT_ASC, $data['clients']);
		
		$data['active'] = 6;
		$this->template->view('payement_client', $data);
	}
	
	public function solde_un_client(){
		$this->add_css_js2();
		
		if(isset($_GET['cli']) and !empty($_GET['cli'])){
			$client = $this->client->get_record(array('id_client' => $_GET['cli']));
			if(!empty($client)){
				$client = $client[0];
				
				//lite des payements
				$vente = $this->vente->get_joind2('payement_vente', 'livraison', 'vente.id_vente', 'payement_vente.id_vente', 'vente.id_livraison', 'livraison.id_livraison', array('id_client' => $_GET['cli']));
				$tab = [];
				$i = 0;
				foreach($vente as $cle => $ven){
					if($ven['montant_paye'] > 0){
						$tab[$i]['date'] = $ven['date_vente'];
						$tab[$i]['somme'] = $ven['qnte_article'] * $ven['prix_unit'];
						$tab[$i]['commentaire'] = '';
						$i ++;
					}
				}
				
				$banque = $this->banque_client->get_record(array('id_client' => $_GET['cli']));
				foreach($banque as $cle => $ban){
					if($ban['somme'] > 0){
						$tab[$i]['id_banque_client'] = $ban['id_banque_client'];
						$tab[$i]['date'] = $ban['date_banque_client'];
						
						if($ban['type_versement'] == 0){
							$tab[$i]['somme'] = -$ban['somme'];
						}else{
							$tab[$i]['somme'] = $ban['somme'];
						}
						
						$tab[$i]['commentaire'] = $ban['commentaire'];
						$i ++;
					}
				}
				
				$deteav = $this->c_c_a->get_record(array('id_client' => $_GET['cli']));
				
				$columns = [];
				foreach($tab as $liv){
					$columns[] = $liv['date'];
				}
				array_multisort($columns, SORT_DESC, $tab);
				
				//liste des achats
				$vente = $this->vente->get_joind4('livraison', 'achat', 'article', 'fournisseur', 'vente.id_livraison', 'livraison.id_livraison', 'vente.num_bordereau', 'achat.num_bordereau', 'article.id_article', 'achat.id_article', 'fournisseur.id_fournisseur', 'achat.id_fournisseur', array('id_client' => $_GET['cli']), ', achat.prix_unit as prix_unit_achat, vente.prix_unit as prix_unit_vente');
				
				$columns = [];
				foreach($vente as $liv){
					$columns[] = $liv['date_de_liv'];
				}
				array_multisort($columns, SORT_DESC, $vente);
				
				//solde total
				if(empty($deteav)){
					$deteav[0]['somme'] = 0;
				}
				$total = $deteav[0]['somme'];
				foreach($tab as $tb){
					$total += $tb['somme'];
				}
				foreach($vente as $tb){
					$total -= $tb['qnte_article'] * $tb['prix_unit_vente'];
				}
				
				$data['total'] = $total;
				$data['deteav'] = $deteav[0];
				$data['payement'] = $tab;
				$data['vente'] = $vente;
				$data['client'] = $client;
				$data['active'] = 6;
				$this->template->view('solde_un_client', $data);
			}else{
				header('Location: liste_creance');
			}
		}else{
			header('Location: liste_creance');
		}
	}
	
	private function add_css_js1(){
		$this->template->add_css('touchspin/jquery.bootstrap-touchspin.min');
		//$this->template->add_css('form/themesaller-forms');
		$this->template->add_css('select2/select2.min');
		$this->template->add_css('chosen/bootstrap-chosen');
		$this->template->add_css('ionRangeSlider/ion.rangeSlider');
		$this->template->add_css('ionRangeSlider/ion.rangeSlider.skinFlat');
		$this->template->add_css('beta');
		
		$this->template->add_js('touchspin/jquery.bootstrap-touchspin.min');
		$this->template->add_js('touchspin/touchspin-active');
		$this->template->add_js('input-mask/jasny-bootstrap.min');
		$this->template->add_js('chosen/chosen.jquery');
		$this->template->add_js('chosen/chosen-active');
		$this->template->add_js('select2/select2.full.min');
		$this->template->add_js('select2/select2-active');
		$this->template->add_js('ionRangeSlider/ion.rangeSlider.min');
		$this->template->add_js('ionRangeSlider/ion.rangeSlider.active');
		$this->template->add_js('rangle-slider/jquery-ui-1.10.4.custom.min');
		$this->template->add_js('rangle-slider/jquery-ui-touch-punch.min');
		$this->template->add_js('rangle-slider/rangle-active');
		$this->template->add_js('knob/jquery.knob');
		$this->template->add_js('knob/knob-active');
		$this->template->add_js('tab');
		
		$this->template->add_js('chosen/chosen.jquery');
		$this->template->add_js('chosen/chosen-active');
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}
	
	private function add_css_js2(){
		$this->template->add_css('editor/select2');
		$this->template->add_css('editor/datetimepicker');
		$this->template->add_css('editor/bootstrap-editable');
		$this->template->add_css('editor/x-editor-style');
		$this->template->add_css('data-table/bootstrap-table');
		$this->template->add_css('data-table/bootstrap-editable');	
		$this->template->add_css('beta');	
		
		$this->template->add_js('data-table/bootstrap-table');
		$this->template->add_js('data-table/tableExport');
		$this->template->add_js('data-table/data-table-active');
		$this->template->add_js('data-table/bootstrap-table-editable');
		$this->template->add_js('data-table/bootstrap-editable');
		$this->template->add_js('data-table/bootstrap-table-resizable');
		$this->template->add_js('data-table/colResizable-1.5.source');
		$this->template->add_js('data-table/bootstrap-table-export');
		$this->template->add_js('editable/jquery.mockjax');
		$this->template->add_js('editable/mock-active');
		$this->template->add_js('editable/select2');
		$this->template->add_js('editable/moment.min');
		$this->template->add_js('editable/bootstrap-datetimepicker');
		$this->template->add_js('editable/bootstrap-editable');
		$this->template->add_js('editable/xediable-active');
		$this->template->add_js('chart/jquery.peity.min');
		$this->template->add_js('peity/peity-active');
		$this->template->add_js('tab');
	}
	
	private function trie_liste($tab, $elmt, $ver = 0){
		if(!empty($tab)){
			if(isset($_POST['date_avant'])){
				$date = $_POST['date_avant'];
				$res = [];
				foreach($tab as $cle => $t){
					if($t[$elmt] <= $date){
						$res[$cle] = $tab[$cle];
					}
				}
				$data['active_trie'] = 1;
				$this->template->vars($data);
				return $res;
			}else if(isset($_POST['date_apres'])){
				$date = $_POST['date_apres'];
				$res = [];
				foreach($tab as $cle => $t){
					if($t[$elmt] >= $date){
						$res[$cle] = $tab[$cle];
					}
				}
				$data['active_trie'] = 2;
				$this->template->vars($data);
				return $res;
			}else if(isset($_POST['date_d1']) and isset($_POST['date_d2'])){
				$date1 = $_POST['date_d1'];
				$date2 = $_POST['date_d2'];
				$res = [];
				foreach($tab as $cle => $t){
					if($t[$elmt] >= $date1 and $t[$elmt] <= $date2){
						$res[$cle] = $tab[$cle];
					}
				}
				$data['active_trie'] = 3;
				$data['date_d1'] = $_POST['date_d1'];
				$data['date_d2'] = $_POST['date_d2'];
				$this->template->vars($data);
				return $res;
			}else{
				if($ver == 0){
					return $tab;
				}else{
					return null;
				}
			}
		}else{
			return NULL;
		}
	}
	
	private function un_mois($tab, $elmt){
		if(!empty($tab)){
			if(isset($_POST['mois'])){
				$date = (int) $_POST['mois'];
				$res = [];
				foreach($tab as $cle => $t){
					if(!empty($t[$elmt])){
						$b = explode('-',$t[$elmt]);
						$c = $b[1].'/'.$b[0];
						if($c == date('m/Y', strtotime('-'.$date.' month'))){
							$res[$cle] = $tab[$cle];
						}
					}
				}
				$data['active_mois'] = $date;
				$this->template->vars($data);
				return $res;
			}else{
				$date = 0;
				$res = [];
				foreach($tab as $cle => $t){
					if(!empty($t[$elmt])){
						$b = explode('-',$t[$elmt]);
						$c = $b[1].'/'.$b[0];
						if($c == date('m/Y', strtotime('-'.$date.' month'))){
							$res[$cle] = $tab[$cle];
						}
					}
				}
				return $res;
			}
		}else{
			return NULL;
		}
	}
	
	private function une_annee($tab, $elmt){
		if(!empty($tab)){
			if(isset($_POST['annee'])){
				$date = (int) $_POST['annee'];
				$res = [];
				foreach($tab as $cle => $t){
					if(!empty($t[$elmt])){
						$b = explode('-',$t[$elmt]);
						$c = $b[0];
						if($c == date('Y', strtotime('-'.$date.' year'))){
							$res[$cle] = $tab[$cle];
						}
					}
				}
				$data['active_mois'] = $date;
				$this->template->vars($data);
				return $res;
			}else{
				$date = 0;
				$res = [];
				foreach($tab as $cle => $t){
					if(!empty($t[$elmt])){
						$b = explode('-',$t[$elmt]);
						$c = $b[0];
						if($c == date('Y', strtotime('-'.$date.' year'))){
							$res[$cle] = $tab[$cle];
						}
					}
				}
				return $res;
			}
		}else{
			return NULL;
		}
	}
	
	private function chercher_petite_date($tab, $elmt){
		if(!empty($tab)){
			$date = date('2019-12');
			foreach($tab as $cle => $t){
				$b = explode('-',$t[$elmt]);
				if($b[2] == 0){
					$b[2] = 1;
				}
				$c = $b[0].'-'.$b[1];
				if($date  > $c){
					$date = $c;
				}
			}
			return $date;
		}else{
			return NULL;
		}
	}
	
	private function chercher_petite_annee($tab, $elmt){
		if(!empty($tab)){
			$date = date('2019');
			foreach($tab as $cle => $t){
				$b = explode('-',$t[$elmt]);
				if($b[2] == 0){
					$b[2] = 1;
				}
				$c = $b[0];
				if($date  > $c){
					$date = $c;
				}
			}
			return $date;
		}else{
			return NULL;
		}
	}
	
	private function sauvegarde(){
		$this->add_css_js1();
		$tabPart=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
		$res = array();
		foreach($tabPart as $lettrePart)
		{
			$rep= $lettrePart.":\\";
			if(@opendir($rep)){
				$df_c = disk_total_space($rep);
				$res[] = strtoupper($lettrePart);
			}
		}
		
		if(isset($_POST['res']) and !empty($_POST['res']) and @opendir($_POST['res'].":\\")){
			// Load the DB utility class
			$this->load->dbutil();

			// Backup your entire database and assign it to a variable
			$backup = $this->dbutil->backup();
			
			$dossier = $_POST['res'].':/an2000';
			if(!is_dir($dossier)){
			   mkdir($dossier);
			}
			
			$dossier = $_POST['res'].':/an2000/geststock';
			if(!is_dir($dossier)){
			   mkdir($dossier);
			}
			
			$dossier = $_POST['res'].':/an2000/geststock/sauvegarde';
			if(!is_dir($dossier)){
			   mkdir($dossier);
			}
			
			$dossier = $_POST['res'].':/an2000/geststock/sauvegarde/'.date('Y_m_d');
			if(!is_dir($dossier)){
			   mkdir($dossier);
			}

			// Load the file helper and write the file to your server
			$this->load->helper('file');
			write_file($_POST['res'].':/an2000/geststock/sauvegarde/'.date('Y_m_d').'/an2000_'.date('Y_m_d_H_i_s').'.gz', $backup);

			// Load the download helper and send the file to your desktop
			//$this->load->helper('download');
			//force_download('an2000_'.date('Y_m_d_H_i_s').'.gz', $backup);
			
			header('Location: home');
		}
		
		$data['res'] = $res;
		$this->template->view('sauvegarde', $data);
	}
	
	/*public function super_admin(){
		
		$this->template->add_css('beta');
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Nom d\'utilisateur', 'trim|required');
		$this->form_validation->set_rules('password', 'Mot de passe', 'trim|required|min_length[4]');
		
		if ($this->form_validation->run()){
			$data1['user_name'] = $_POST['username'];
			$data1['user_password'] = sha1($_POST['password']);
			
			$this->users->add_record($data1, array('id_users' => $user['id_users']));
			
			header('Location: logout');
		}
		
		$this->template->add_css('touchspin/jquery.bootstrap-touchspin.min');
		$this->template->add_css('datapicker/datepicker3');
		//$this->template->add_css('form/themesaller-forms');
		$this->template->add_css('colorpicker/colorpicker');
		$this->template->add_css('select2/select2.min');
		$this->template->add_css('chosen/bootstrap-chosen');
		$this->template->add_css('ionRangeSlider/ion.rangeSlider');
		$this->template->add_css('ionRangeSlider/ion.rangeSlider.skinFlat');
		
		$this->template->add_js('touchspin/jquery.bootstrap-touchspin.min');
		$this->template->add_js('touchspin/touchspin-active');
		$this->template->add_js('colorpicker/jquery.spectrum.min');
		$this->template->add_js('colorpicker/color-picker-active');
		$this->template->add_js('datapicker/bootstrap-datepicker');
		$this->template->add_js('datapicker/datepicker-active');
		$this->template->add_js('input-mask/jasny-bootstrap.min');
		$this->template->add_js('chosen/chosen.jquery');
		$this->template->add_js('chosen/chosen-active');
		$this->template->add_js('select2/select2.full.min');
		$this->template->add_js('select2/select2-active');
		$this->template->add_js('ionRangeSlider/ion.rangeSlider.min');
		$this->template->add_js('ionRangeSlider/ion.rangeSlider.active');
		$this->template->add_js('rangle-slider/jquery-ui-1.10.4.custom.min');
		$this->template->add_js('rangle-slider/jquery-ui-touch-punch.min');
		$this->template->add_js('rangle-slider/rangle-active');
		$this->template->add_js('knob/jquery.knob');
		$this->template->add_js('knob/knob-active');
		$this->template->add_js('tab');
		
		$this->template->add_js('chosen/chosen.jquery');
		$this->template->add_js('chosen/chosen-active');
		$this->template->view_theme('toto', 'login');
		
		//header('Location: home');
	}*/
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */