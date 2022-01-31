<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolePermissionsSeeder::class); // Seeder
        $this->call(DepartmentSeeder::class); // Seeder
        $this->call(DesignationSeeder::class); // Seeder
        $this->call(UserSeeder::class); // Factory
        // Already Added Employee Seeder with UserSeeder
        // $this->call(EmployeeSeeder::class); // Factory
        $this->call(ShiftSeeder::class); // Seeder
        $this->call(ScheduleSeeder::class); // Seeder
        $this->call(JobsSeeder::class); // Factory
        $this->call(JobApplicantSeeder::class); // Factory
        $this->call(AttendanceSeeder::class); // Factory
        $this->call(HolidaySeeder::class); // Seeder
        $this->call(LeaveSeeder::class); // Seeder
        $this->call(AwardSeeder::class); // Seeder
        $this->call(EmployeeAwardSeeder::class); // Factory
        $this->call(NoticeBoardSeeder::class); // Factory
        $this->call(InventorySeeder::class); // Factory
        $this->call(TrainingSeeder::class); // Seeder
        $this->call(EmployeeTrainingSeeder::class); // Factory
        $this->call(TaskSeeder::class); // Factory
        $this->call(TaskCommentSeeder::class); // Factory
        $this->call(EmailTemplateSeeder::class); // Factory
        $this->call(TicketSeeder::class); // Factory
        $this->call(TicketCommentSeeder::class); // Factory
        $this->call(EmployeeInventorySeeder::class); // Factory
        $this->call(EmployeeInventoryCommentSeeder::class); // Factory
        $this->call(EmployeeNoticeBoardSeeder::class); //Factory
        $this->call(EmployeeScheduleSeeder::class); //Factory
    }
}
