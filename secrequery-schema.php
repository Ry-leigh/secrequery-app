Schema::create('roles', function (Blueprint $table) {
    $table->id();
    $table->string('role');
    $table->timestamps();
});

Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->foreignId('role_id')->constrained()->onDelete('cascade');
    $table->string('first_name');
    $table->string('middle_name')->nullable();
    $table->string('last_name');
    $table->string('suffix')->nullable();
    $table->string('email')->unique();
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password');
    $table->rememberToken();
    $table->timestamps();
});

Schema::create('password_reset_tokens', function (Blueprint $table) {
    $table->string('email')->primary();
    $table->string('token');
    $table->timestamp('created_at')->nullable();
});

Schema::create('sessions', function (Blueprint $table) {
    $table->string('id')->primary();
    $table->foreignId('user_id')->nullable()->index();
    $table->string('ip_address', 45)->nullable();
    $table->text('user_agent')->nullable();
    $table->longText('payload');
    $table->integer('last_activity')->index();
});

Schema::create('cache', function (Blueprint $table) {
    $table->string('key')->primary();
    $table->mediumText('value');
    $table->integer('expiration');
});

Schema::create('cache_locks', function (Blueprint $table) {
    $table->string('key')->primary();
    $table->string('owner');
    $table->integer('expiration');
});

Schema::create('jobs', function (Blueprint $table) {
    $table->id();
    $table->string('queue')->index();
    $table->longText('payload');
    $table->unsignedTinyInteger('attempts');
    $table->unsignedInteger('reserved_at')->nullable();
    $table->unsignedInteger('available_at');
    $table->unsignedInteger('created_at');
});

Schema::create('job_batches', function (Blueprint $table) {
    $table->string('id')->primary();
    $table->string('name');
    $table->integer('total_jobs');
    $table->integer('pending_jobs');
    $table->integer('failed_jobs');
    $table->longText('failed_job_ids');
    $table->mediumText('options')->nullable();
    $table->integer('cancelled_at')->nullable();
    $table->integer('created_at');
    $table->integer('finished_at')->nullable();
});

Schema::create('failed_jobs', function (Blueprint $table) {
    $table->id();
    $table->string('uuid')->unique();
    $table->text('connection');
    $table->text('queue');
    $table->longText('payload');
    $table->longText('exception');
    $table->timestamp('failed_at')->useCurrent();
});

Schema::create('year_levels', function (Blueprint $table) {
    $table->id();
    $table->string('year_level');
    $table->timestamps();
});

Schema::create('programs', function (Blueprint $table) {
    $table->id();
    $table->string('program');
    $table->timestamps();
});

Schema::create('courses', function (Blueprint $table) {
    $table->id();
    $table->string('course');
    $table->timestamps();
});

Schema::create('staff_categories', function (Blueprint $table) {
    $table->id();
    $table->string('staff_category');
    $table->timestamps();
});

Schema::create('positions', function (Blueprint $table) {
    $table->id();
    $table->foreignId('staff_category_id')->constrained()->onDelete('cascade');
    $table->string('position');
    $table->timestamps();
});

Schema::create('instructors', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->foreignId('position_id')->nullable()->constrained()->onDelete('cascade');
    $table->string('gender')->nullable();
    $table->timestamps();
});

Schema::create('days', function (Blueprint $table) {
    $table->id();
    $table->string('day');
    $table->timestamps();
});

Schema::create('schedules', function (Blueprint $table) {
    $table->id();
    $table->foreignId('year_level_id')->constrained()->onDelete('cascade');
    $table->foreignId('program_id')->constrained()->onDelete('cascade');
    $table->foreignId('course_id')->constrained()->onDelete('cascade');
    $table->foreignId('instructor_id')->constrained()->onDelete('cascade');
    $table->foreignId('day_id')->constrained()->onDelete('cascade');
    $table->time('starts_at');
    $table->time('ends_at');
    $table->timestamps();
});

Schema::create('instructor_attendance_records', function (Blueprint $table) {
    $table->id();
    $table->date('date');
    $table->foreignId('schedule_id')->constrained()->onDelete('cascade');
    $table->time('time_in')->nullable();
    $table->time('time_out')->nullable();
    $table->timestamps();
    $table->unique(['schedule_id', 'date']);
});

Schema::create('students', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->foreignId('year_level_id')->constrained()->onDelete('cascade');
    $table->foreignId('program_id')->constrained()->onDelete('cascade');
    $table->boolean('irregular')->default(false);
    $table->timestamps();
});

Schema::create('irregular_student_courses', function (Blueprint $table) {
    $table->id();
    $table->foreignId('student_id')->constrained()->onDelete('cascade');
    $table->foreignId('schedule_id')->constrained()->onDelete('cascade');
    $table->timestamps();
});

Schema::create('attendance_statuses', function (Blueprint $table) {
    $table->id();
    $table->string('attendance_status');
    $table->timestamps();
});

Schema::create('student_attendance_records', function (Blueprint $table) {
    $table->id();
    $table->foreignId('student_id')->constrained()->onDelete('cascade');
    $table->foreignId('schedule_id')->constrained()->onDelete('cascade');
    $table->date('date');
    $table->foreignId('attendance_status_id')->nullable()->constrained()->onDelete('cascade');
    $table->string('notes')->nullable();
    $table->timestamps();
});

Schema::create('notes', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->string('title')->default('untitled');
    $table->string('content')->nullable();
    $table->timestamps();
});

Schema::create('tasks', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->dateTime('deadline')->nullable();
    $table->string('title')->default('untitled');
    $table->string('content')->nullable();
    $table->timestamps();
});

Schema::create('events', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->dateTime('date');
    $table->string('title')->default('untitled');
    $table->string('content')->nullable();
    $table->timestamps();
});

Schema::create('notifications', function (Blueprint $table) {
    $table->uuid('id')->primary();
    $table->string('type');
    $table->morphs('notifiable');
    $table->text('data');
    $table->timestamp('read_at')->nullable();
    $table->timestamps();
});