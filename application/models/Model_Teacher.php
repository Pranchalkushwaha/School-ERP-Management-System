<?php


class Model_Teacher extends CI_Model{
    public function __construct(){
        parent ::__construct();
    }
    public function create($teacherimg_name)
    {
        if($teacherimg_name == ''){
            $teacherimg_name = '';
        }

        $insert_data = array(
            //colName => value
            'teacher_name' => $this->input->post('teacher_name'),
            'teacher_age' => $this->input->post('teacher_age'),
            'teacher_email' => $this->input->post('teacher_email'),
            'teacher_contact' => $this->input->post('teacher_contact'),
            'teacher_image' => $teacherimg_name,    
        );
        $status = $this->db->insert('teacher',$insert_data);
        return ($status == true ? true : false);
    }
    
    public function fetchTeacherData($teacherId = null)
    {
        # code...
        if($teacherId){
            $sql = "SELECT * FROM teacher WHERE teacher_id = ?";
            $query = $this->db->query($sql, array($teacherId));
            $result = $query->row_array();
            return $result;
        }
        else{
            $sql = "SELECT * FROM teacher ";
            $query = $this->db->query($sql);
            $result = $query->result_array();
            return $result;
        }
    }
}