

CREATE TABLE `users` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
);


insert  into `users`(`username`,`password`,`name`) values 
('admin','$2y$10$07pKhRyknBBbQSPa0CKIE.QW6wZUiqRTR5egExyQiAaH9gWwEmakO','Ardhika Restu');

