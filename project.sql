
CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `Faculty` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`uid`, `name`, `password`, `address`, `phone`,`Faculty`,`Gender`,) VALUES
(1, 'Sonu Bastakoti', 'password', 'Chhobar', '9866266936','Engineering','Female'),
(2, 'Hanok Tamang', '', 'Lalitpur', '9865090972','Engineering','Male'),
(3, 'Alina Maharjan ', '', 'Bungamati', '9813650671','Engineering','Female'),
(4, 'Nikesh Katuwal', '', 'Kathmandu', '9865134923','Engineering','Male'),
(5, 'Sujata Shrestha', '', 'Karyabinayak', '9860411096','Science','Female');

ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);
  
  ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;
