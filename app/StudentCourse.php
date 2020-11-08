<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\StudentCourse
 *
 * @property int $id
 * @property int $student_id
 * @property int $course_id
 * @property int $semester
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|StudentCourse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentCourse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentCourse query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentCourse whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentCourse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentCourse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentCourse whereSemester($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentCourse whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentCourse whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class StudentCourse extends Model
{
    public function student()
    {
        return $this->belongsTo('App\Student')->withDefault();
    }
    public function courses()
    {
        return $this->belongsTo('App\Course')->withDefault();
    }
}
