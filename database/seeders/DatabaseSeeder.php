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
        // \App\Models\User::factory(10)->create();
        $this->call(RolePermissionsSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(DesignationSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(ShiftSeeder::class);
        $this->call(ScheduleSeeder::class);
        $this->call(JobsSeeder::class);
        $this->call(JobApplicantSeeder::class);
        $this->call(AttendanceSeeder::class);
        $this->call(HolidaySeeder::class);
        $this->call(LeaveSeeder::class);
        $this->call(AwardSeeder::class);
        $this->call(EmployeeAwardSeeder::class);
        $this->call(NoticeBoardSeeder::class);
        $this->call(InventorySeeder::class);
        $this->call(TrainingSeeder::class);
        $this->call(EmployeeTrainingSeeder::class);
        $this->call(TaskSeeder::class);
        $this->call(TaskCommentSeeder::class);
        $this->call(EmailTemplateSeeder::class);
        $this->call(TicketSeeder::class);
        $this->call(TicketCommentSeeder::class);
        $this->call(UserSeeder::class);
    }
}
