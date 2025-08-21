<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class License extends Model
{
    use Searchable;

    protected $table = 'licenses';
    protected $fillable =  [
        'applicant_id',
        'gender',
        'age_group',
        'race',
        'training',
        'signals',
        'yield',
        'speed_control',
        'night_drive',
        'road_signs',
        'steer_control',
        'mirror_usage',
        'confidence',
        'parking',
        'theory_test',
        'reactions',
        'qualified',
    ];

    /**
     * Get the indexable data array for the model.
     *
     * @return array<string, mixed>
     */
    public function toSearchableArray(): array
    {
        return [
            'id' => $this->id,
            'applicant_id' => $this->applicant_id,
            'gender' => $this->gender,
            'age_group' => $this->age_group,
            'race' => $this->race,
            'training' => $this->training,
            'qualified' => $this->qualified ? 'qualified' : 'not qualified',
            'parking' => $this->parking,
            'theory_test' => $this->theory_test,
            'signals' => $this->signals,
            'yield' => $this->yield,
            'speed_control' => $this->speed_control,
            'night_drive' => $this->night_drive,
            'road_signs' => $this->road_signs,
            'steer_control' => $this->steer_control,
            'mirror_usage' => $this->mirror_usage,
            'confidence' => $this->confidence,
            'reactions' => $this->reactions,
        ];
    }

    /**
     * Determine if the model should be searchable.
     *
     * @return bool
     */
    public function shouldBeSearchable(): bool
    {
        return true;
    }
}
