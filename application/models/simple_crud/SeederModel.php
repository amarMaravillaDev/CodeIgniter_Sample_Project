<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SeederModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function seedData($tableName, $recordLimit)
    {
        // Check if the table exists
        if (!$this->db->table_exists(strtolower($tableName))) {
            echo "Table $tableName does not Exist.";

            return;
        }

        // Generate random data and insert into the table
        $data = array();

        for ($i = 0; $i < $recordLimit; $i++) {
            $data[] = $this->generateRandomRecord();
        }

        $this->db->insert_batch($tableName, $data);

        echo 'Data Seeded Successfully.';
    }

    private function generateRandomRecord()
    {
        // Generate random data for each field
        $firstName = $this->randomName('first');
        $middleName = $this->randomName('middle');
        $lastName = $this->randomName('last');
        $suffix = $this->randomSuffix();
        $gender = rand(0, 1) ? 'Male' : 'Female';
        $birthDate = $this->randomDate();
        $age = $this->calculateAge($birthDate);
        $contactNumber = $this->randomContactNumber();
        $emailAddress = strtolower($firstName . '.' . $lastName . '@example.com');
        $status = (rand(0, 1) == 1) ? 'Active' : 'Inactive';

        return array(
            'FIRST_NAME' => $firstName,
            'MIDDLE_NAME' => $middleName,
            'LAST_NAME' => $lastName,
            'SUFFIX' => $suffix,
            'GENDER' => $gender,
            'BIRTH_DATE' => $birthDate,
            'AGE' => $age,
            'CONTACT_NUMBER' => $contactNumber,
            'EMAIL_ADDRESS' => $emailAddress,
            'STATUS' => $status
        );
    }

    private function randomName($type)
    {
        // Generate random first, middle, or last name
        $names = array('John', 'Jane', 'Michael', 'Emily', 'Christopher', 'Emma', 'William', 'Olivia');

        return $names[array_rand($names)];
    }

    private function randomSuffix()
    {
        // Generate random suffix (e.g., Jr., Sr., III)
        $suffixes = array('', 'Jr.', 'Sr.', 'III', 'IV');

        return $suffixes[array_rand($suffixes)];
    }

    private function randomDate()
    {
        // Generate random birth date within a reasonable range
        $start_date = strtotime('1950-01-01');
        $end_date = strtotime('2005-01-01');

        return date('Y-m-d', rand($start_date, $end_date));
    }

    private function calculateAge($birth_date)
    {
        // Calculate age based on birth date
        $birth_timestamp = strtotime($birth_date);
        $now = time();
        $age = date('Y', $now) - date('Y', $birth_timestamp);

        if (date('md', $now) < date('md', $birth_timestamp)) {
            $age--;
        }

        return $age;
    }

    private function randomContactNumber()
    {
        // Generate random contact number
        return '555-' . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT) . '-' . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
    }
}