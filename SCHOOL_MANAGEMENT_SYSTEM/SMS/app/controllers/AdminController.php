<?php
    class AdminController {
        public function dashboard() {
            require "../app/views/admin/dashboard.php" ;
        }
        public function addstudent() {
            require "../app/views/admin/addstudent.php" ;
        }
        public function allstudents() {
            require "../app/views/admin/allstudents.php" ;
        }
        public function addteacher() {
            require "../app/views/admin/addteacher.php" ;
        }
        public function allteachers() {
            require "../app/views/admin/allteachers.php" ;
        }
        public function addclass() {
            require "../app/views/admin/addclass.php" ;
        }
        public function allclasses() {
            require "../app/views/admin/allclasses.php" ;
        }
        public function addsubject() {
            require "../app/views/admin/addsubject.php" ;
        }
        public function allsubjects() {
            require "../app/views/admin/allsubjects.php" ;
        }
        public function schoolsettings()     {
            require "../app/views/admin/schoolsettings.php" ;
        }
        public function adminsettings() {
            require "../app/views/admin/adminsettings.php" ;
        }
    }
?>