<?php

namespace App\Console\Commands;

use App\Models\Admin;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;
use function Laravel\Prompts\form;
use function Laravel\Prompts\text;

class CreateNewAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:new';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new admin user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $responses = form()
                        ->text("Name for the new admin user?",
                            required: true,
                            name: "name"
                        )
                        ->text("Email for the new admin user?",
                            required: true,
                            validate: fn($value) => $this->validate('email', $value,['required', 'email', 'unique:admins']),
                            name: "email"
                        )
                        ->submit();

        $admin = new Admin($responses);

        $admin->save();
        $admin->sendOnboardingEmail();

        $this->info("{$responses['name']} is now an Admin, An email has been sent to {$responses['email']} to complete the onboarding process");
    }

    protected function validate(string $field, string $value, array $rules)
    {
        $v = Validator::make([$field=>$value], [$field => $rules]);

        if($v->fails())
            return $v->messages()->first();
    }
}
