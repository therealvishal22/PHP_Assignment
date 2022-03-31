

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `fname`, `lname`, `email`, `address`, `mobile`, `password`, `designation`, `gender`, `file`) VALUES
(1, 'vishal', 'patil', 'vishalpatil@gmail.com', 'parola', '7744801246', 'asdf1234', 'Software Devloper', 'male', ''),
(2, 'Milind', 'patil', 'milindpatil@gmail.com', 'chopda', '7878797987', 'qwer123', 'Software Develper', 'Male', 'File'),
(3, 'Bhavesh', 'gurav', 'bhaveshgurav@gmail.com', 'shirpur','4897561246', 'bg12345', 'Software Devloper', 'male', 'file'),
(4, 'bhavesh', 'gurav', 'bhavesh123@gmail.com', '', '7620582083', '12345', '23', '', ''),
(5, 'vishal', 'soanr', 'vishals@gmail.com', 'Dhule', '7878797987', 'abcd123', 'Software Devloper', 'male', 'file'),
(6, 'chaitnya', 'patil', 'cpatil@gmail.com', 'nasik', '7058554647', 'lkjh123', 'data scientist', 'male', 'file'),
(7, 'jaydeep', 'pakdjn', 'jadeep@gmail.com', '', '6515411451', '12345', '23', '', ''),
(8, 'jaydeep', 'wader', 'jaydee@gmail.com', 'rajkot', '8546574975', 'jv123', 'Software Devloper', 'male', ''),


-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

