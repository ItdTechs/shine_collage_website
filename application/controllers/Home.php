<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	

	public function index() {
        $data = [
            'page_title' => 'Yared Industrial Technology and Business College (YITBC)',
            'page_description' => 'Yared Industrial Technology and Business College is dedicated to providing quality technical and business education, shaping skilled professionals for a technologically advanced Ethiopia.',
            'page_keywords' => 'Yared Industrial Technology, Business College, technical education, skilled professionals, Ethiopia',
            'canonical_url' => 'http://localhost/main_site/'
        ];
        $this->load->view('index', $data);
    }
	
	public function about() {
        $data = [
            'page_title' => 'About Yared Industrial Technology and Business College | YITBC',
            'page_description' => 'Learn about Yared Industrial Technology and Business College, our mission to provide quality technical and business education, and our commitment to shaping skilled professionals for Ethiopia.',
            'page_keywords' => 'About Yared Industrial Technology, Business College, technical education, skilled professionals, Ethiopia',
            'canonical_url' => 'http://localhost/main_site/about'
        ];
        $this->load->view('about', $data);
    }

	public function programs() {
        $data = [
            'page_title' => 'Academic Programs | Yared Industrial Technology and Business College',
            'page_description' => 'Explore our range of academic programs including degree, TVET/diploma, and business & social science programs designed to equip you with practical skills and knowledge.',
            'page_keywords' => 'Academic programs, degree programs, TVET, diploma, business studies, technical education, YITBC',
            'canonical_url' => 'http://localhost/main_site/programs'
        ];
        $this->load->view('programs', $data);
    }
	

	public function staff() {
        $data = [
            'page_title' => 'Staff Directory | Yared Industrial Technology and Business College',
            'page_description' => 'Meet the dedicated faculty and staff members of Yared Industrial Technology and Business College who are committed to providing quality education and support to our students.',
            'page_keywords' => 'Staff directory, faculty, education professionals, Yared Industrial Technology and Business College, YITBC',
            'canonical_url' => 'http://localhost/main_site/staff'
        ];
        $this->load->view('staff', $data);
    }

    public function contact() {
        $data = [
            'page_title' => 'Contact Us | Yared Industrial Technology and Business College',
            'page_description' => 'Get in touch with Yared Industrial Technology and Business College for inquiries about our academic programs, admissions, or other services. We are here to assist you.',
            'page_keywords' => 'Contact Yared Industrial Technology and Business College, academic inquiries, admissions, support, YITBC',
            'canonical_url' => 'http://localhost/main_site/contact'
        ];
        $this->load->view('contact', $data);
    }

    
	
}
