<?php
    class Student{
        var $Student_ID;
        var $Student_Name;
        var $Student_Nim;
        var $Student_Angkatan;
        var $Student_Jurusan;

        function __construct($sid, $sname, $snim, $sangkatan, $sjurusan){
            $this->Student_Id =$sid;
            $this->Student_Name =$sname;
            $this->Student_Nim =$snim;
            $this->Student_Angkatan=$sangkatan;
            $this->Student_Jurusan=$sjurusan;
        }
        
        public function getStudent_Id() { return $this->Student_Id; }
        public function getStudent_Name() { return $this->Student_Name; }
        public function getStudent_Nim() { return $this->Student_Nim; }
        public function getStudent_Angkatan(){ return $this->Student_Angkatan; }
        public function getStudent_Jurusan() { return $this->Student_Jurusan; }

        public function setStudent_Id($str) { $this->Student_Id =$str; }
        public function setStudent_Name($str) { $this->Student_Name =$str; }
        public function setStudent_Nim($str) { $this->Student_Nim =$str; }
        public function setStudent_Angkatan($str) { $this->Student_Angkatan=$str; }
        public function setStudent_Jurusan($str) { $this->Student_Jurusan =$str; }
    }
?>