  <?php
    function biodata() {
        $biodata = [
            "name" => "Fariv Indra Cahyo Nugroho",
            "age" => 21,
            "address" => "kab. Magetan Jawa Timur",
            "hobbies" => [
                "coding","futsal","mancing"
            ],
            "is_married" => false,
            "list_school" => [
                "school" => "SMAN 2 Magetan",
                "year_in" => 2014,
                "year_out" => 2017,
                "major" => null
            ],
            "skills" => [
             "skill_name" => "PHP",
             "level" => "beginner"
            ],
            "interest_in_coding" => true,
        ];

        $json_data = json_encode($biodata);
        return $json_data;
    }
    echo biodata();
?>