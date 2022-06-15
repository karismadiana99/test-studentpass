<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Renew_model extends CI_Model
{

    public function updateApplicant($user_id)
    {
        $data = [
            'user_id' => $user_id,
            'app_fullname' => $this->input->post('app_fullname'),
            'app_nric' => $this->input->post('app_nric'),
            'app_gender' => $this->input->post('app_gender'),
            'app_placebirth' => $this->input->post('app_placebirth'),
            'app_nationality' => $this->input->post('app_nationality'),
            'app_status' => 'In Process',
            'type_application' => 'Renew application',
            'completed' => 1,
            'date_update' => time(),
        ];
        // echo json_encode($data);
        $this->db->where('user_id', $user_id);
        $this->db->update('applicant', $data);
    }

    public function updatePassport($user_id)
    {
        $data = [
            'user_id' => $user_id,
            'type_travel' => $this->input->post('type_travel'),
            'no_passport' => $this->input->post('no_passport'),
            'place_issue' => $this->input->post('place_issue'),

        ];
        // echo json_encode($data);
        $this->db->where('user_id', $user_id);
        $this->db->update('passport', $data);
    }

    public function updateStudy($user_id)
    {
        $data = [
            'user_id' => $user_id,
            'duration_study' => $this->input->post('duration_study'),
            'name_course' => $this->input->post('name_course'),
            'level_course' => $this->input->post('level_course'),
            'name_institution' => $this->input->post('name_institution'),
            'type_institution' => $this->input->post('type_institution'),

        ];
        // echo json_encode($data);
        $this->db->where('user_id', $user_id);
        $this->db->update('study', $data);
    }
}