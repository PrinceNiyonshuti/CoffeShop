<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trainee>
 */
class TraineeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'education_level' => $this->faker->randomElement(['A 0','A 1','A 2','Bachelor', 'Master', 'PhD', 'Other']),
            'district' => $this->faker->randomElement(['Nyanza', 'Huye', 'Ruhango', 'Nyamagabe', 'Gisagara', 'Muhanga', 'Ngororero', 'Karongi', 'Bugesera', 'Ngoma', 'Rusizi', 'Nyabihu', 'Rutsiro', 'Rubavu', 'Nyamasheke', 'Rulindo', 'Gakenke', 'Burera', 'Gicumbi', 'Musanze', 'Rwamagana', 'Gatsibo', 'Kayonza', 'Kirehe', 'Ngara', 'Nyagatare', 'Ruhango', 'Rusizi', 'Rutsiro', 'Ngororero', 'Gakenke', 'Burera', 'Gicumbi', 'Musanze', 'Rwamagana', 'Gatsibo', 'Kayonza', 'Kirehe', 'Ngara', 'Nyagatare', 'Ruhango', 'Rusizi', 'Rutsiro', 'Ngororero', 'Gakenke', 'Burera', 'Gicumbi', 'Musanze', 'Rwamagana', 'Gatsibo', 'Kayonza', 'Kirehe', 'Ngara', 'Nyagatare', 'Ruhango', 'Rusizi', 'Rutsiro', 'Ngororero', 'Gakenke', 'Burera', 'Gicumbi', 'Musanze', 'Rwamagana', 'Gatsibo', 'Kayonza', 'Kirehe', 'Ngara', 'Nyagatare', 'Ruhango', 'Rusizi', 'Rutsiro', 'Ngororero', 'Gakenke', 'Burera', 'Gicumbi', 'Musanze', 'Rwamagana', 'Gatsibo', 'Kayonza', 'Kirehe', 'Ngara', 'Nyagatare', 'Ruhango', 'Rusizi', 'Rutsiro', 'Nyarugenge']),
            'email' => $this->faker->unique()->safeEmail,
            'lastName' => $this->faker->lastName,
            'firstName' => $this->faker->firstName,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'field_of_study' => $this->faker->randomElement(['Computer Science', 'Software Engineering', 'Information Technology', 'Computer Engineering', 'Electrical Engineering', 'Mechanical Engineering', 'Civil Engineering', 'Chemical Engineering', 'Industrial Engineering', 'Aerospace Engineering', 'Biomedical Engineering', 'Environmental Engineering', 'Materials Engineering', 'Nuclear Engineering', 'Petroleum Engineering', 'Agricultural Engineering', 'Biological Engineering', 'Chemical Engineering', 'Civil Engineering', 'Computer Engineering', 'Electrical Engineering', 'Environmental Engineering', 'Industrial Engineering', 'Mechanical Engineering', 'Metallurgical Engineering', 'Mining Engineering', 'Nuclear Engineering', 'Petroleum Engineering', 'Aerospace Engineering', 'Biomedical Engineering', 'Materials Engineering', 'Nuclear Engineering', 'Petroleum Engineering', 'Agricultural Engineering', 'Biological Engineering', 'Chemical Engineering', 'Civil Engineering', 'Computer Engineering', 'Electrical Engineering', 'Environmental Engineering', 'Industrial Engineering', 'Mechanical Engineering', 'Metallurgical Engineering', 'Mining Engineering', 'Nuclear Engineering', 'Petroleum Engineering', 'Aerospace Engineering', 'Biomedical Engineering', 'Materials Engineering', 'Nuclear Engineering', 'Petroleum Engineering', 'Agricultural Engineering', 'Biological Engineering', 'Chemical Engineering', 'Civil Engineering', 'Computer Engineering', 'Electrical Engineering', 'Environmental Engineering', 'Industrial Engineering', 'Mechanical Engineering', 'Metallurgical Engineering', 'Mining Engineering', 'Nuclear Engineering', 'Petroleum Engineering', 'Aerospace Engineering', 'Biomedical Engineering', 'Materials Engineering', 'Nuclear Engineering', 'Petroleum Engineering', 'Agricultural Engineering']),
            'birth_date' => $this->faker->date('Y-m-d', 'now'),
            'province' => $this->faker->randomElement(['Kigali', 'Eastern', 'Northern', 'Southern', 'Western']),
            'sector' => $this->faker->randomElement(['Kicukiro', 'Gasabo', 'Nyarugenge', 'Kamonyi', 'Muhanga', 'Nyamagabe', 'Ruhango', 'Gisagara', 'Huye', 'Nyanza', 'Ngororero', 'Burera', 'Gakenke', 'Gicumbi', 'Musanze', 'Rulindo', 'Rusizi', 'Nyabihu', 'Rubavu', 'Rutsiro', 'Karongi', 'Ngoma', 'Nyamasheke', 'Bugesera', 'Gatsibo', 'Kayonza', 'Kirehe', 'Ngara', 'Nyagatare']),
            'Address' => $this->faker->address,
            'phone' => $this->faker->numerify('##########'),
            'isStudent' => $this->faker->randomElement(['no', 'yes']),
            'haveLaptop' => $this->faker->randomElement(['no', 'yes']),
            'isEmployed' => $this->faker->randomElement(['no', 'yes']),
            'Hackerrank_score' => $this->faker->randomFloat(0, 0, 100),
            'english_score' => $this->faker->randomFloat(0, 0, 100),
            'interview' => $this->faker->randomFloat(0, 0, 100),
            'interview_decision' => $this->faker->randomElement(['failed', 'passed']),
            'past_andela_programs' => $this->faker->randomElement(['didnt attempt', 'yes']),
            'cycle_name' => 'Cycle ' . $this->faker->randomNumber(1,20),
            'car_brand_name' => $this->faker->randomElement(['Toyota', 'Nissan', 'Mazda', 'Mitsubishi', 'Suzuki', 'Honda', 'Hyundai', 'Kia', 'Daihatsu', 'Subaru', 'Isuzu', 'Mitsubishi Fuso', 'Hino', 'Fuso', 'UD Trucks', 'Renault', 'Peugeot', 'Citroën', 'DS Automobiles', 'Volkswagen', 'Audi', 'SEAT', 'Škoda', 'Porsche', 'Bentley', 'Bugatti', 'Lamborghini', 'Ford', 'Opel', 'BMW', 'Mini', 'Rolls-Royce', 'Land Rover', 'Jaguar', 'Mercedes-Benz', 'Smart', 'Maybach', 'Alfa Romeo', 'Fiat', 'Lancia', 'Jeep', 'Chrysler', 'Dodge', 'Ram', 'Maserati', 'Tesla', 'Cadillac', 'Chevrolet', 'Infiniti', 'Acura', 'Lexus', 'Mazda', 'Mitsubishi', 'Suzuki', 'Honda', 'Hyundai', 'Kia', 'Daihatsu', 'Subaru', 'Isuzu', 'Mitsubishi Fuso', 'Hino', 'Fuso', 'UD Trucks', 'Renault', 'Peugeot', 'Citroën', 'DS Automobiles', 'Volkswagen', 'Audi', 'SEAT', 'Škoda', 'Porsche', 'Bentley', 'Bugatti', 'Lamborghini', 'Ford', 'Opel', 'BMW', 'Mini', 'Rolls-Royce', 'Land Rover', 'Jaguar', 'Mercedes-Benz', 'Smart', 'Maybach', 'Alfa Romeo', 'Fiat', 'Lancia', 'Jeep', 'Chrysler', 'Dodge', 'Ram', 'Maserati', 'Tesla', 'Cadillac', 'Chevrolet', 'Infiniti', 'Acura', 'Lexus', 'Mazda', 'Mitsubishi', 'Suzuki', 'Honda', 'Hyundai', 'Kia', 'Daihatsu', 'Subaru', 'Isuzu', 'Mitsubishi Fuso', 'Hino', 'Fuso', 'UD Trucks', 'Renato']),
        ];
    }
}
