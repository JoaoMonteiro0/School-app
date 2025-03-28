<?php

use yii\db\Migration;

class m250328_112928_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $auth = Yii::$app->authManager;
        /* roles */
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $teacher = $auth->createRole('teacher');
        $auth->add($teacher);
        $user = $auth->createRole('user');
        $auth->add($user);

        /* front-office */
        /* permissions for user (parents / childs) */
        $viewChildData = $auth->createPermission('viewChildData');
        $auth->add($viewChildData);
        $editChildData = $auth->createPermission('editChildData');
        $auth->add($editChildData);

        $viewChildGrades = $auth->createPermission('viewChildGrades');
        $auth->add($viewChildGrades);

        $viewSchoolEvents = $auth->createPermission('viewSchoolEvents');
        $auth->add($viewSchoolEvents);

        $createChildAbsence = $auth->createPermission('createChildAbsence');
        $auth->add($createChildAbsence);
        $viewChildAbsence = $auth->createPermission('viewChildAbsence');
        $auth->add($viewChildAbsence);

        /* back-office */
        /* permissions for admin */
        $createStudent = $auth->createPermission('createStudent');
        $auth->add($createStudent);
        $addStudentClass = $auth->createPermission('addStudentClass');
        $auth->add($addStudentClass);
        $viewStudentData = $auth->createPermission('viewStudentData');
        $auth->add($viewStudentData);
        $updateStudentData = $auth->createPermission('updateStudentData');
        $auth->add($updateStudentData);
        $deleteStudent = $auth->createPermission('deleteStudent');
        $auth->add($deleteStudent);

        /* Event management */
        $createEvent = $auth->createPermission('createEvent');
        $auth->add($createEvent);
        $viewEvents = $auth->createPermission('viewEvents');
        $auth->add($viewEvents);
        $updateEvent = $auth->createPermission('updateEvent');
        $auth->add($updateEvent);
        $deleteEvent = $auth->createPermission('deleteEvent');
        $auth->add($deleteEvent);

        /* Teacher management */
        $createTeacher = $auth->createPermission('createTeacher');
        $auth->add($createTeacher);
        $viewTeachers = $auth->createPermission('viewTeachers');
        $auth->add($viewTeachers);
        $updateTeacher = $auth->createPermission('updateTeacher');
        $auth->add($updateTeacher);
        $deleteTeacher = $auth->createPermission('deleteTeacher');
        $auth->add($deleteTeacher);

        /* Summaries */
        $viewSummaries = $auth->createPermission('viewSummaries');
        $auth->add($viewSummaries);

        /* Absences */
        $createAbsence = $auth->createPermission('createAbsence');
        $auth->add($createAbsence);
        $viewAbsences = $auth->createPermission('viewAbsences');
        $auth->add($viewAbsences);
        $updateAbsence = $auth->createPermission('updateAbsence');
        $auth->add($updateAbsence);
        $deleteAbsence = $auth->createPermission('deleteAbsence');
        $auth->add($deleteAbsence);

        /* Grades */
        $viewGrades = $auth->createPermission('viewGrades');
        $auth->add($viewGrades);
        $updateGrades = $auth->createPermission('updateGrades');
        $auth->add($updateGrades);

        /* Working hours */
        $viewWorkingHours = $auth->createPermission('viewWorkingHours');
        $auth->add($viewWorkingHours);
        $updateWorkingHours = $auth->createPermission('updateWorkingHours');
        $auth->add($updateWorkingHours);

        /* Subjects */
        $createSubject = $auth->createPermission('createSubject');
        $auth->add($createSubject);
        $viewSubjects = $auth->createPermission('viewSubjects');
        $auth->add($viewSubjects);
        $updateSubject = $auth->createPermission('updateSubject');
        $auth->add($updateSubject);
        $deleteSubject = $auth->createPermission('deleteSubject');
        $auth->add($deleteSubject);
        $assignTeacherToSubject = $auth->createPermission('assignTeacherToSubject');
        $auth->add($assignTeacherToSubject);

        /* Teacher permissions */
        $addGrades = $auth->createPermission('addGrades');
        $auth->add($addGrades);
        $updateTeacherGrades = $auth->createPermission('updateTeacherGrades');
        $auth->add($updateTeacherGrades);
        $deleteTeacherGrades = $auth->createPermission('deleteTeacherGrades');
        $auth->add($deleteTeacherGrades);

        $markAttendance = $auth->createPermission('markStudentAttendance');
        $auth->add($markAttendance);
        $viewAttendance = $auth->createPermission('viewStudentAttendance');
        $auth->add($viewAttendance);

        $createSummary = $auth->createPermission('createSummary');
        $auth->add($createSummary);
        $viewTeacherSummaries = $auth->createPermission('viewTeacherSummaries');
        $auth->add($viewTeacherSummaries);

        $logWorkingHours = $auth->createPermission('logWorkingHours');
        $auth->add($logWorkingHours);
        $viewOwnWorkingHours = $auth->createPermission('viewOwnWorkingHours');
        $auth->add($viewOwnWorkingHours);

        $viewClasses = $auth->createPermission('viewClasses');
        $auth->add($viewClasses);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250328_112928_rbac cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250328_112928_rbac cannot be reverted.\n";

        return false;
    }
    */
}
