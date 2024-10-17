<?php
function getProductReviews($product) {
    $rewiews = [
        [
            'username' => 'Anna',
            'rating' => 4,
            'review' => 'impressive!',
            'date' => '2024-10-17'
        ],
        [
            'username' => 'Eva',
            'rating' => 5,
            'review' => 'thank you very much!',
            'date' => '2024-10-8'    
        ],
        [
            'username' => 'Olga',
            'rating' => 3,
            'review' => 'not as expected',
            'date' => '2024-10-10'
        ]
        ];
        return $rewiews
}
$reviews = getProductReviews(1);

foreach ($reviews as $review) {
    echo "Пользователь:" . $rewiew['username'] . "<br>";
    echo "Оценка:" . $rewiew['rating'] . "/5<br>";
    echo "Отзыв:" . $rewiew['review'] . "<br>";
    echo "Дата:" . $rewiew['date'] . "<br><br>";
}