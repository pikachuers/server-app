<?php
/**
 * Created by PhpStorm.
 * User: Willy
 * Date: 10/29/2014
 * Time: 6:18 PM
 */

class BookTableSeeder extends Seeder {
	public function run(){
		Book::create( //1
			array(
				'judul' => "Theory and problems of data, processing",
				'pengarang' => "Martin M. Lipschutz  Seymour Lipschutz",
				'ddc_code' => "004",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070379831", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create( //2
			array(
				'judul' => "The basic handbook : encyclopedia of the basic computer language",
				'pengarang' => "David A. Lien",
				'ddc_code' => "005.133 03",
				'penerbit' => "Compusoft Publishing",
				'edisi' => "2", //nullable
				'isbn' => "0932760058", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create( //3
			array(
				'judul' => "Business data processing systems",
				'pengarang' => "Lawrence S.Orilia  Nancy B.Stern  Robert  A. Stern",
				'ddc_code' => "658.05",
				'penerbit' => "John Wiley & Sons, Inc",
				'edisi' => "2", //nullable
				'isbn' => "0471042544", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1977"
			)
		);
		Book::create( //4
			array(
				'judul' => "Introducing systems design",
				'pengarang' => "Enid Squire",
				'ddc_code' => "005.120 28",
				'penerbit' => "Addison-Wesley",
				'isbn' => "0201074214", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create( //5
			array(
				'judul' => "A simplified  guide to structured cobol programming",
				'pengarang' => "Daniel D. McCracken",
				'ddc_code' => "005.133",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "0471582840", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1976"
			)
		);
		Book::create( //6
			array(
				'judul' => "Learning to program in structured cobol : part 2",
				'pengarang' => "Timothy R. Lister  Edward Yourdon",
				'ddc_code' => "005.133",
				'penerbit' => "Your Don Press",
				'isbn' => "0917072030", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1978"
			)
		);
		Book::create( //7
			array(
				'judul' => "Problem solving and structured programming in Pascal",
				'pengarang' => "Elliot B. Koffman",
				'ddc_code' => "005.133",
				'penerbit' => "Addison-Wesley",
				'isbn' => "0201038935", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create( //8
			array(
				'judul' => "Fortran for IBM system/360 : a programmed instruction course",
				'pengarang' => "S. C. Plumb  David E. Napper",
				'ddc_code' => "005.133",
				'penerbit' => "Science  Research  Associates ",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1965"
			)
		);
		Book::create( //9
			array(
				'judul' => "Understanding Fortran",
				'pengarang' => "Michel Boillot",
				'ddc_code' => "005.133",
				'penerbit' => "West Publishing",
				'edisi' => "2",
				'isbn' => "0829903550", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1978"
			)
		);
		Book::create( //10
			array(
				'judul' => "An introduction to programming and problem solving with Pascal",
				'pengarang' => "-",
				'ddc_code' => "005.133",
				'penerbit' => "John Wiley & Sons, Inc",
				'edisi' => "2",
				'isbn' => "0471804479", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create( //11
			array(
				'judul' => "An introduction to programming and problem solving with Pascal",
				'pengarang' => "G. Michael Schneider  Steven W. Weingart  David M. Perlman",
				'ddc_code' => "005.133",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "0471044318", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1978"
			)
		);
		Book::create( //12
			array(
				'judul' => "Theory and problems of statistics in SI units ",
				'pengarang' => "Murray R. Spiegel  R. W. Boxer",
				'ddc_code' => "519.5",
				'penerbit' => "McGraw Hill",
				'edisi' => "1",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1961"
			)
		);
		Book::create( //13
			array(
				'judul' => "Basic programming",
				'pengarang' => "John G. Kemeny  Thomas E. Kurtz",
				'ddc_code' => "005.133",
				'penerbit' => "John Wiley & Sons, Inc",
				'edisi' => "3",
				'isbn' => "0471018635", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create( //14
			array(
				'judul' => "Fortran 77 : featuring structured programming",
				'pengarang' => "Loren P. Meissner  Elliott I. Organick",
				'ddc_code' => "005.133",
				'penerbit' => "Addison-Wesley",
				'isbn' => "020105499X", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1963"
			)
		);
		Book::create( //15
			array(
				'judul' => "Business data processing and systems analysis",
				'pengarang' => "Pete Kilgannon",
				'ddc_code' => "658.403 2",
				'penerbit' => "Edward  Arnold",
				'isbn' => "0713127554", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create( //16
			array(
				'judul' => "Computer games : for business, school and home for TRS-80 level II basic",
				'pengarang' => "J. Victor Nahigian  William S. Hodges",
				'ddc_code' => "793.7",
				'penerbit' => "Winthrop",
				'isbn' => "0876261659", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create( //17
			array(
				'judul' => "The structured programming cookbook : a productivity tool for the COBOL programmer",
				'pengarang' => "Paul Noll",
				'ddc_code' => "005.133 [COB]",
				'penerbit' => "Mike Murach & Associates",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1978"
			)
		);
		Book::create(  //18
			array(
				'judul' => "Learning to program in structured Cobol : part 1",
				'pengarang' => "Edward Yourdon  Chris Gane  Trish Sarson",
				'ddc_code' => "005.3",
				'penerbit' => "Your Don Press",
				'isbn' => "091707212X", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1987"
			)
		);
		//colomn 20, number 19 = //18
		Book::create(  //19
			array(
				'judul' => "Computer Graphic : With 29 ready to-ran programs",
				'pengarang' => "David Chance",
				'ddc_code' => "006.68",
				'penerbit' => "TAB Books",
				'isbn' => "0830612769", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create( //20
			array(
				'judul' => "Fortran IV for business and general applications",
				'pengarang' => "Harice L. Seeds",
				'ddc_code' => "005.133",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "0471771090", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1975"
			)
		);
		Book::create( //21
			array(
				'judul' => "ANSI FORTRAN IV A Structured Programming Approacch",
				'pengarang' => "J. W. Perry Cole",
				'ddc_code' => "005.133",
				'penerbit' => "Wm. C. Brown",
				'isbn' => "0697081257", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1978"
			)
		);
		Book::create( //22
			array(
				'judul' => "Business programming : fortran  IV",
				'pengarang' => "Nesa L'abbe Wu",
				'ddc_code' => "005.133 [FOR]",
				'penerbit' => "Wm. C. Brown",
				'edisi' => "2",
				'isbn' => "0697081230", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1977"
			)
		);
		Book::create( //23
			array(
				'judul' => "Theory and problems of programming with fortran : including structured fortran",
				'pengarang' => "Seymour Lipschutz  Arthur Poe",
				'ddc_code' => "005.133",
				'penerbit' => "McGraw Hill",
				'isbn' => "007037984X", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1978"
			)
		);
		Book::create( //24
			array(
				'judul' => "Structured ANS COBOL : part 2 an advanced course",
				'pengarang' => "Mike Murach  Paul Noll",
				'ddc_code' => "005.133",
				'penerbit' => "Mike Murach & Associates",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1979"
			)
		);
		Book::create( //25
			array(
				'judul' => "Linear Programming : methods and applications",
				'pengarang' => "Saul I. Gass",
				'ddc_code' => "519.72",
				'penerbit' => "McGraw Hill",
				'edisi' => "3",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1958"
			)
		);
		Book::create( //26
			array(
				'judul' => "Programming assembler language",
				'pengarang' => "Peter Abel",
				'ddc_code' => "005.456",
				'penerbit' => "Reston Publishing",
				'isbn' => "083595658X", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1979"
			)
		);
		Book::create( //27
			array(
				'judul' => "RPG II with business applications",
				'pengarang' => "Stanley E. Myers",
				'ddc_code' => "005.133",
				'penerbit' => "Reston Publishing",
				'isbn' => "0835963039", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1979"
			)
		);
		Book::create( //28
			array(
				'judul' => "Structured ANS COBOL : part 1 a course for novices",
				'pengarang' => "Mike Murach Paul Noll",
				'ddc_code' => "005.133",
				'penerbit' => "Mike Murach & Associates",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1979"
			)
		);
		Book::create( //29
			array(
				'judul' => "IBM guide to Cobol system/38, system/34, series/1 5280",
				'pengarang' => "International Business Machines Corporation",
				'ddc_code' => "005.133 [COB]",
				'penerbit' => "International Business Machines",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create( //30
			array(
				'judul' => "Cobol - 80 user s guide, reference manual",//user's
				'pengarang' => "Microsoft",
				'ddc_code' => "005.133 [COB]",
				'penerbit' => "Microsoft Press", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create( //31
			array(
				'judul' => "Programming languages : paradigm and practice",
				'pengarang' => "Doris Appleby",
				'ddc_code' => "005.13",
				'penerbit' => "McGraw Hill",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1991"
			)
		);
		Book::create( //32
			array(
				'judul' => "Data file programming in basic",
				'pengarang' => "Leroy Finkel  Jerald R. Brown",
				'ddc_code' => "005.133 [BAS]",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "047108333X", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create( //33
			array(
				'judul' => "The Pascal tutor",
				'pengarang' => "The Denver Software Company",
				'ddc_code' => "005.133 [PAS]",
				'penerbit' => "The Denver Software Company ",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create( //34
			array(
				'judul' => "Theory and problems of probability and statistics",
				'pengarang' => "Murray R. Spiegel",
				'ddc_code' => "519.2",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070990301", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create( //35
			array(
				'judul' => "A simplified  guide to structured cobol programming",
				'pengarang' => "Daniel D. McCracken",
				'ddc_code' => "005.133",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "0471582840", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1976"
			)
		);
		Book::create( //36
			array(
				'judul' => "Digital computer basics",
				'pengarang' => "NAVAL Education and Training command",
				'ddc_code' => "004",
				'penerbit' => "Naval  education and training command",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1978"
			)
		);
		Book::create( //37
			array(
				'judul' => "Business data processing and systems analysis",
				'pengarang' => "Pete Kilgannon",
				'ddc_code' => "658.403 2",
				'penerbit' => "Edward  Arnold",
				'isbn' => "0713127554", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create( //38
			array(
				'judul' => "Digital systems fundamentals",
				'pengarang' => "John M. Motil",
				'ddc_code' => "621.39",
				'penerbit' => "McGraw Hill",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1972"
			)
		);
		Book::create( //39
			array(
				'judul' => "Computer architecture and organization",
				'pengarang' => "John P. Hayes",
				'ddc_code' => "004.22",
				'penerbit' => "McGraw Hill",
				'edisi' => "2",
				'isbn' => "0070273553", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1988"
			)
		);
		Book::create( //40
			array(
				'judul' => "Database design",
				'pengarang' => "Gio Wiederhold",
				'ddc_code' => "005.12",
				'penerbit' => "McGraw Hill",
				'isbn' => "007070130x", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1977"
			)
		);
		Book::create( //41
			array(
				'judul' => "The 8086-8088 : primer : an introduction to their architecture, system design and programming",
				'pengarang' => "Stephen P. Morse",
				'ddc_code' => "004.165",
				'penerbit' => "Intel  corporation",
				'edisi' => "2",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1972"
			)
		);
		Book::create( //42
			array(
				'judul' => "Elementary numerical analysis : an algorithmic approach",
				'pengarang' => "S. D Conte  Carl De Boor",
				'ddc_code' => "519.4",
				'penerbit' => "McGraw Hill",
				'edisi' => "3",
				'isbn' => "0070662282", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create( //43
			array(
				'judul' => "Apple  graphics &  Arcade game design",
				'pengarang' => "Jeffrey  Stanton",
				'ddc_code' => "006.676 5",
				'penerbit' => "McGraw Hill",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create(  //44
			array(
				'judul' => "Operating systems : a systematic view",
				'pengarang' => "William S. Davis",
				'ddc_code' => "005.43",
				'penerbit' => "Addison-Wesley",
				'edisi' => "2",
				'isbn' => "0201111160", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create(  //45
			array(
				'judul' => "Compiler construction for digital computers",
				'pengarang' => "David Gries",
				'ddc_code' => "005.453",
				'penerbit' => "John Wiley & Sons, Inc",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1971"
			)
		);
		Book::create( //46
			array(
				'judul' => "Programming languages",
				'pengarang' => "Allen B. Tucker Jr",
				'ddc_code' => "005.13",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070654158", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1977"
			)
		);
		Book::create( //47
			array(
				'judul' => "Introduction to operations research and management science : a general systems approach",
				'pengarang' => "James L. Riggs  Michael S. Inoue",
				'ddc_code' => "658.403 4",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070528705", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1975"
			)
		);
		Book::create( //48
			array(
				'judul' => "Principles of data-base management",
				'pengarang' => "James Martin",
				'ddc_code' => "005.74",
				'penerbit' => "Prentice Hall",
				'isbn' => "0137089171", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1976"
			)
		);
		Book::create( //49
			array(
				'judul' => "An introductory approach to operations research",
				'pengarang' => "Robert J. Thierauf",
				'ddc_code' => "658.403 4",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "0471031259", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1978"
			)
		);
		Book::create( //50
			array(
				'judul' => "Accounting information systems and business organizations",
				'pengarang' => "Barry E. Cushing",
				'ddc_code' => "657.028 5",
				'penerbit' => "Addison-Wesley",
				'edisi' => "2",
				'isbn' => "02010106X", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1978"
			)
		);
		Book::create( //51
			array(
				'judul' => "Introduction to computer programming ANSI cobol",
				'pengarang' => "Gary B. Shelly  Thomas J. Cashman",
				'ddc_code' => "005.133",
				'penerbit' => "Anaheim Publishing Company",
				'isbn' => "0882361031", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1978"
			)
		);
		Book::create( //52
			array(
				'judul' => "Management science : an introduction to modern quantitative analysis and decision making.",
				'pengarang' => "Gerald.E  Thompson",
				'ddc_code' => "658.403",
				'penerbit' => "McGraw Hill",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1976"
			)
		);
		Book::create( //53
			array(
				'judul' => "Information systems through cobol",
				'pengarang' => "Andreas S. Philippakis  Leonard J. Kazmier",
				'ddc_code' => "658.403",
				'penerbit' => "McGraw Hill ",
				'edisi' => "2",
				'isbn' => "0070497915", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create( //54
			array(
				'judul' => "Strategic planning for MIS",
				'pengarang' => "Ephraim R. McLean  John V. Soden",
				'ddc_code' => "658.403",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "0471585629", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1977"
			)
		);
		Book::create( //55
			array(
				'judul' => "Management",
				'pengarang' => "Herbert G. Hicks  C. Ray Gullett",
				'ddc_code' => "658",
				'penerbit' => "McGraw Hill",
				'edisi' => "4",
				'isbn' => "0070287732", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1967"
			)
		);
		Book::create( //56
			array(
				'judul' => "Schaum's outline series theory and problems of operations research",
				'pengarang' => "Richard Bronson",
				'ddc_code' => "001.422",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070079773", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create( //57
			array(
				'judul' => "A user guide to the UNIX system",
				'pengarang' => "Rebecca Thomas  Jean Yates",
				'ddc_code' => "005.422 82",
				'penerbit' => "McGraw Hill",
				'isbn' => "0931988713", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create( //58
			array(
				'judul' => "The analysis, design, and implementation of information system",
				'pengarang' => "Henry C. Lucas, Jr.",
				'ddc_code' => "005.74",
				'penerbit' => "McGraw Hill",
				'edisi' => "2",
				'isbn' => "0070389276", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create( //59
			array(
				'judul' => "Fundamentals of computer science",
				'pengarang' => "Andrew J. T. Colin",
				'ddc_code' => "004",
				'penerbit' => "Macmillan",
				'isbn' => "0333305035", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create( //60
			array(
				'judul' => "Fundamentals of data structures",
				'pengarang' => "Ellis Horowitz  Sartaj Sahni",
				'ddc_code' => "005.73",
				'penerbit' => "Computer Science Press",
				'isbn' => "091489420", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1986"
			)
		);
		Book::create( //61
			array(
				'judul' => "Accounting system : procedures and methods",
				'pengarang' => "Cecil Gillespie",
				'ddc_code' => "657.028 5",
				'penerbit' => "Prentice Hall",
				'edisi' => "3",
				'isbn' => "0876921713", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create( //62
			array(
				'judul' => "Operating systems",
				'pengarang' => "Stuart E. Madnick  John J. Donovan",
				'ddc_code' => "005.43",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070394555", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create(  //63
			array(
				'judul' => "Structured Cobol : A Modern Approach",
				'pengarang' => "Henry Mullish",
				'ddc_code' => "005.133",
				'penerbit' => "Harper & Row",
				'isbn' => "0060446528", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create(  //64
			array(
				'judul' => "The A to Z book of computer games",
				'pengarang' => "Thomas C. McIntire",
				'ddc_code' => "794.8",
				'penerbit' => "TAB Books",
				'isbn' => "083061062", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1979"
			)
		);
		Book::create(  //65
			array(
				'judul' => "Introduction to applied numerical analysis",
				'pengarang' => "Richard W. Hamming",
				'ddc_code' => "519.4",
				'penerbit' => "McGraw Hill",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1971"
			)
		);
		Book::create(  //66
			array(
				'judul' => "Pascal programs : for scientists and engineers",
				'pengarang' => "Alan R. Miller",
				'ddc_code' => "005.133",
				'penerbit' => "Sybex",
				'isbn' => "089588058X", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create(  //67
			array(
				'judul' => "Apple II-6502 Assembly language tutor",
				'pengarang' => "Richard Haskell",
				'ddc_code' => "005.265",
				'penerbit' => "Sine Nomine",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "-"
			)
		);
		Book::create(  //68
			array(
				'judul' => "Digital logic and computer design",
				'pengarang' => "M. Morris Mano",
				'ddc_code' => "621.392",
				'penerbit' => "Prentice Hall",
				'isbn' => "0132143380", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1979"
			)
		);
		Book::create(  //69
			array(
				'judul' => "Cobol compiler",
				'pengarang' => "Microsoft",
				'ddc_code' => "005.133 [COB]",
				'penerbit' => "Microsoft Press",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "-"
			)
		);
		Book::create(  //70
			array(
				'judul' => "Computers Management & Information",
				'pengarang' => "David Firnberg",
				'ddc_code' => "005",
				'penerbit' => "George Allen & Unwin",
				'isbn' => "0046581421", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1973"
			)
		);
		Book::create( //71
			array(
				'judul' => "Schaum's outline of theory and  problems of accounting II",
				'pengarang' => "James A. Cashin  Joel J. Lerner",
				'ddc_code' => "657",
				'penerbit' => "McGraw Hill",
				'edisi' => "2",
				'isbn' => "007010252X", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create( //72
			array(
				'judul' => "Microprocessors : design and applications",
				'pengarang' => "Andrew Veronis",
				'ddc_code' => "621.391",
				'penerbit' => "Reston Publishing",
				'isbn' => "0879794931", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1978"
			)
		);
		Book::create( //73
			array(
				'judul' => "A guide to COBOL programming ",
				'pengarang' => "Daniel D. McCracken  Umberto Garbassi",
				'ddc_code' => "005.133",
				'penerbit' => "John Wiley & Sons, Inc",
				'edisi' => "2",
				'isbn' => "0471582433", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1970"
			)
		);
		Book::create( //74
			array(
				'judul' => "Data structures using Pascal",
				'pengarang' => "Aaron M. Tenenbaum  Moshe J. Augenstein",
				'ddc_code' => "005.73",
				'penerbit' => "Prentice Hall",
				'isbn' => "0131964364", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create( //75
			array(
				'judul' => "Macro Assembler",
				'pengarang' => "Microsoft",
				'ddc_code' => "005.133",
				'penerbit' => "Microsoft Press",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create( //76
			array(
				'judul' => "Data systems and management : an introduction to systems analysis and design",
				'pengarang' => "Alton R. Kindred",
				'ddc_code' => "005.12",
				'penerbit' => "Prentice Hall",
				'edisi' => "2",
				'isbn' => "0131964852", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1973"
			)
		);
		Book::create( //77
			array(
				'judul' => "Computer data structures",
				'pengarang' => "John L. Pfaltz",
				'ddc_code' => "005.73",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070497435", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1977"
			)
		);
		Book::create( //78
			array(
				'judul' => "Programming languages",
				'pengarang' => "Allen B. Tucker Jr",
				'ddc_code' => "005.13",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070654158", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1977"
			)
		);
		Book::create( //79
			array(
				'judul' => "Systems programming",
				'pengarang' => "John J. Donovan",
				'ddc_code' => "005",
				'penerbit' => "McGraw Hill",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1972"
			)
		);
		Book::create( //80
			array(
				'judul' => "Penggunaan komputer yang efektif dalam bisnis : dengan ancangan manajemen berdasarkan sasaran",
				'pengarang' => "Kit Grindley  John Humble",
				'ddc_code' => "650.028 5",
				'penerbit' => "Pustaka Binaman Pressindo",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create( //81
			array(
				'judul' => "6800 assembly language programming",
				'pengarang' => "Lance A. Leventhal",
				'ddc_code' => "005.265",
				'penerbit' => "Osborne & associates",
				'isbn' => "0931988128", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1987"
			)
		);
		Book::create( //82
			array(
				'judul' => "System design and documentation : an introduction to the HIPO method",
				'pengarang' => "Harry Katzan",
				'ddc_code' => "003.7",
				'penerbit' => "Van Nostrand Reinhold",
				'isbn' => "0442242670", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1976"
			)
		);
		Book::create( //83
			array(
				'judul' => "Structured Cobol : a pragmatic approach",
				'pengarang' => "Robert T. Grauer  Marshal A. Crawford",
				'ddc_code' => "005.133 [COB]",
				'penerbit' => "Prentice Hall",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create( //84
			array(
				'judul' => "Microcomputer  disk  techniques",
				'pengarang' => "Paul  Swanson",
				'ddc_code' => "004.563",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070625824", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create( //85
			array(
				'judul' => "RPG : programming",
				'pengarang' => "Widia S.",
				'ddc_code' => "005.133 [RPG]",
				'penerbit' => "Modern Computer Course",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create( //86
			array(
				'judul' => "Effective data base design",
				'pengarang' => "William H. Inmon",
				'ddc_code' => "005.740 68",
				'penerbit' => "Prentice Hall",
				'isbn' => "0132414899", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create( //87
			array(
				'judul' => "Apple logo : introduction to programming through turtle graphics",
				'pengarang' => "Cynthia J. Solomon",
				'ddc_code' => "621.399",
				'penerbit' => "Computer System, inc.",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create( //88
			array(
				'judul' => "Pemrograman komputer Fortran IV",
				'pengarang' => "Nyoman Susila",
				'ddc_code' => "005.133",
				'penerbit' => "Baskara",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create( //89
			array(
				'judul' => "Computer progrmming fundamental fortran IV",
				'pengarang' => "Sushil Dass Gupta",
				'ddc_code' => "005.133 [FOR]",
				'penerbit' => "Khanna Publishers",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1979"
			)
		);
		Book::create( //90
			array(
				'judul' => "Perencanaan dan pengendalian dengan PERT dan CPM",
				'pengarang' => "Richard I.Levin, Charles A.Kirkpatrick, penterjemah:Magdalena Adiwardana J.",
				'ddc_code' => "658.403 2",
				'penerbit' => "Academic Press",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1977"
			)
		);
		Book::create( //91
			array(
				'judul' => "Uraian lengkap metode network planning : jilid III",
				'pengarang' => "Soetomo Kajatno",
				'ddc_code' => "658.403 2",
				'penerbit' => "Badan Penerbit Pekerjaan Umum",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1974"
			)
		);
		Book::create( //92
			array(
				'judul' => "Uraian lengkap metode network planning : jilid I",
				'pengarang' => "Soetomo Kajatno",
				'ddc_code' => "658.403 2",
				'penerbit' => "Badan Penerbit Pekerjaan Umum",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1969"
			)
		);
		Book::create( //93
			array(
				'judul' => "Uraian lengkap metode network planning : jilid II",
				'pengarang' => "Soetomo Kajatno",
				'ddc_code' => "658.403 2",
				'penerbit' => "Badan Penerbit Pekerjaan Umum",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1969"
			)
		);
		Book::create( //94
			array(
				'judul' => "SPSS introductory guide : bacis statistics and operations",
				'pengarang' => "Marija J. Norusis",
				'ddc_code' => "005.302 1",
				'penerbit' => "Sine Nomine",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "-"
			)
		);
		Book::create( //95
			array(
				'judul' => "Updates for IBM personal computer cobol compiler (version 1.00)",
				'pengarang' => "IBM",
				'ddc_code' => "005.133 [COB]",
				'penerbit' => "International Business Machines",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1960"
			)
		);
		Book::create( //96
			array(
				'judul' => "Theory and problems of optics",
				'pengarang' => "Eugene Hecht",
				'ddc_code' => "535",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070277303", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1975"
			)
		);
		Book::create( //97
			array(
				'judul' => "The psychology of computer programming",
				'pengarang' => "Gerald M. Weinberg",
				'ddc_code' => "005.13",
				'penerbit' => "Van Nostrand Reinhold",
				'isbn' => "0442292643", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1971"
			)
		);
		Book::create( //98
			array(
				'judul' => "Business comunication in the personal computer age",
				'pengarang' => "Bryan Pfaffenberger",
				'ddc_code' => "005.368 2",
				'penerbit' => "Irwin",
				'isbn' => "0256036535", //nullable
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1987"
			)
		);
		Book::create( //99
			array(
				'judul' => "Fortran compiler",
				'pengarang' => "Microsoft Corporation",
				'ddc_code' => "005.133 [FOR]",
				'penerbit' => "Microsoft Press",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create( //100
			array(
				'judul' => "COBOL-80 : microsoft cobol-80 documentation, Cobol-80 reference manual",
				'pengarang' => "Microsoft",
				'ddc_code' => "005.133 [COB]",
				'penerbit' => "Microsoft Press",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create(
			array(
				'judul' => "Pelajaran elektronika  : pengolah mikro / komputer mikro",
				'pengarang' => "Wasito S",
				'ddc_code' => "621.391 6",
				'penerbit' => "Karya Utama",
				'edisi' => "2",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create(
			array(
				'judul' => "How to computerize your small business",
				'pengarang' => "Jules A. Cohen  Catherine Scott Mckinney",
				'ddc_code' => "658.05",
				'penerbit' => "Prentice Hall",
				'isbn' => "0134038576",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create(
			array(
				'judul' => "Management information systems : conceptual foundations, structure, and development",
				'pengarang' => "Gordon B. Davis",
				'ddc_code' => "658.403 8",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070158274",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1974"
			)
		);
		Book::create(
			array(
				'judul' => "Accounting principles",
				'pengarang' => "Philip E. Fess  C. Rollin Niswonger",
				'ddc_code' => "657",
				'penerbit' => "South-Western Publishing",
				'edisi' => "13",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "-"
			)
		);
		Book::create(
			array(
				'judul' => "Accounting and information systems",
				'pengarang' => "John R. Page  H. Paul Hooper",
				'ddc_code' => "657.028 5",
				'penerbit' => "Reston Publishing",
				'isbn' => "0835900827",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1979"
			)
		);
		Book::create(
			array(
				'judul' => "Accounting information systems and business organizations",
				'pengarang' => "Barry E. Cushing  Marshall B. Romney",
				'ddc_code' => "657.028 5",
				'penerbit' => "Addison-Wesley",
				'edisi' => "4",
				'isbn' => "0201103176",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1987"
			)
		);
		Book::create(
			array(
				'judul' => "Kalkulus: jilid satu",
				'pengarang' => "Moedomo ... [et al.]",
				'ddc_code' => "515",
				'penerbit' => "Penerbit Institut Teknologi Bandung",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create(
			array(
				'judul' => "SPSS introductory guide : bacis statistics and operations",
				'pengarang' => "Marija J. Norusis",
				'ddc_code' => "005.302 1",
				'penerbit' => "Sine Nomine",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "-"
			)
		);
		Book::create(
			array(
				'judul' => "Linear programming and economic analysis",
				'pengarang' => "Robert Dorfman  Paul A. Samuelson  Robert M. Solow",
				'ddc_code' => "519.72",
				'penerbit' => "McGraw Hill",
				'isbn' => "070176213",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1958"
			)
		);
		Book::create( //110
			array(
				'judul' => "Background math for a computer world",
				'pengarang' => "Ruth Ashley",
				'ddc_code' => "519",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "0471035068",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1973"
			)
		);
		Book::create(
			array(
				'judul' => "Kewiraan untuk mahasiswa",
				'pengarang' => "Lemhannas",
				'ddc_code' => "320.12",
				'penerbit' => "PT. Gramedia Pustaka Utama",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1985"
			)
		);
		Book::create(
			array(
				'judul' => "Budgeting : profit planning and control",
				'pengarang' => "Glenn A. Welsch",
				'ddc_code' => "658.154",
				'penerbit' => "Prentice Hall",
				'edisi' => "4",
				'isbn' => "0876921314",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create(
			array(
				'judul' => "Pengantar metodologi research sosial",
				'pengarang' => "Kartini Kartono",
				'ddc_code' => "001.42",
				'penerbit' => "Alumni",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create(
			array(
				'judul' => "Digital circuits and logic design",
				'pengarang' => "Samuel C. Lee",
				'ddc_code' => "621.395",
				'penerbit' => "Prentice Hall",
				'isbn' => "0876921497",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create(
			array(
				'judul' => "Introduction to digital computer technology",
				'pengarang' => "Louis Nashelsky",
				'ddc_code' => "621.39",
				'penerbit' => "John Wiley & Sons, Inc",
				'edisi' => "2",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1977"
			)
		);
		Book::create(
			array(
				'judul' => "Digital logic and computer design",
				'pengarang' => "M. Morris Mano",
				'ddc_code' => "621.392",
				'penerbit' => "Prentice Hall",
				'isbn' => "0132143380",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1979"
			)
		);
		Book::create(
			array(
				'judul' => "Accounting information systems and business organizations",
				'pengarang' => "Barry E. Cushing",
				'ddc_code' => "657.028 5",
				'penerbit' => "Addison-Wesley",
				'edisi' => "2",
				'isbn' => "02010106X",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1978"
			)
		);
		Book::create(
			array(
				'judul' => "Introduction to operations research and management science : a general systems approach",
				'pengarang' => "James L. Riggs  Michael S. Inoue",
				'ddc_code' => "658.403 4",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070528705",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1975"
			)
		);
		Book::create(
			array(
				'judul' => "An introductory approach to operations research",
				'pengarang' => "Robert J. Thierauf",
				'ddc_code' => "658.403 4",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "0471031259",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1978"
			)
		);
		Book::create( //120
			array(
				'judul' => "Introduction to management information systems",
				'pengarang' => "Robert G. Murdick  Joel E. Ross",
				'ddc_code' => "658.403 8",
				'penerbit' => "Prentice Hall",
				'isbn' => "0134862333",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1977"
			)
		);
		Book::create(
			array(
				'judul' => "Schaum's outline of theory and problems of accounting I",
				'pengarang' => "James A. Cashin  Joel J. Lerner",
				'ddc_code' => "657",
				'penerbit' => "McGraw Hill",
				'edisi' => "2",
				'isbn' => "0070102511",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create(
			array(
				'judul' => "Theory and problems of digital principles",
				'pengarang' => "Roger L. Tokheim",
				'ddc_code' => "621.381 5",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070649286",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create(
			array(
				'judul' => "Statistics for business",
				'pengarang' => "Byron L. Newton",
				'ddc_code' => "519.5",
				'penerbit' => "Science Research Associates",
				'isbn' => "0574184651",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1973"
			)
		);
		Book::create(
			array(
				'judul' => "Logic & memory experiments using TTL IC'S",
				'pengarang' => "David G. Larsen  Peter R. Rony",
				'ddc_code' => "621.395",
				'penerbit' => "Howard W.Sams & Co",
				'isbn' => "067221542X",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1978"
			)
		);
		Book::create(
			array(
				'judul' => "Business mathematics",
				'pengarang' => "L. W. T. Stafford",
				'ddc_code' => "510",
				'penerbit' => "Mackdonald  and Evans",
				'edisi' => "2",
				'isbn' => "0712102825",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1969"
			)
		);
		Book::create(
			array(
				'judul' => "Computing problems for Fortran solution",
				'pengarang' => "Robert Teague",
				'ddc_code' => "005.133",
				'penerbit' => "Canfield  Press",
				'isbn' => "063886723",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1972"
			)
		);
		Book::create(
			array(
				'judul' => "TTL Cookbook",
				'pengarang' => "Don Lancaster",
				'ddc_code' => "621.395",
				'penerbit' => "Howard W.Sams & Co",
				'edisi' => "1",
				'isbn' => "0672210355",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1974"
			)
		);
		Book::create(
			array(
				'judul' => "Pulse & Switching circuits",
				'pengarang' => "Harvey F. Swearer",
				'ddc_code' => "621.381 534",
				'penerbit' => "Foulsham-tab  limited",
				'isbn' => "0704201518",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1975"
			)
		);
		Book::create(
			array(
				'judul' => "Computer languages and their uses",
				'pengarang' => "Garry Marshall",
				'ddc_code' => "005.13",
				'penerbit' => "Granada",
				'isbn' => "0246120223",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create( //130
			array(
				'judul' => "Introduction to the design and analysis of algorithms",
				'pengarang' => "S. E. Goodman  S. T. Hedetniemi",
				'ddc_code' => "005.1",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070237530",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1977"
			)
		);
		Book::create(
			array(
				'judul' => "The spectrum programmer",
				'pengarang' => "S. M. Gee",
				'ddc_code' => "005.265",
				'penerbit' => "Granada",
				'isbn' => "0246120258",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create(
			array(
				'judul' => "Management",
				'pengarang' => "James A. F. Stoner",
				'ddc_code' => "658",
				'penerbit' => "Prentice Hall",
				'edisi' => "2",
				'isbn' => "013549642x",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create(
			array(
				'judul' => "Guide to CMOS basics, circuits, &  experiments",
				'pengarang' => "Howard M. Berlin",
				'ddc_code' => "621.397 32",
				'penerbit' => "Howard W.Sams & Co",
				'isbn' => "067221654x",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1979"
			)
		);
		Book::create(
			array(
				'judul' => "101 Color Computer Programming Tips & Tricks",
				'pengarang' => "Ron Clark",
				'ddc_code' => "005.3",
				'penerbit' => "Arco Publishing",
				'isbn' => "0866680071",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create(
			array(
				'judul' => "Taming your computer : a guide for business and proffesional people  ",
				'pengarang' => "Jerome Kanter",
				'ddc_code' => "005",
				'penerbit' => "Prentice Hall",
				'isbn' => "0138843953",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create(
			array(
				'judul' => "Advanced basic : applications and problems",
				'pengarang' => "James S. Coan",
				'ddc_code' => "005.131",
				'penerbit' => "Hayden Book Company",
				'isbn' => "0810458551",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1977"
			)
		);
		Book::create(
			array(
				'judul' => "Electronic computer technology",
				'pengarang' => "Norman R. Scott",
				'ddc_code' => "621.39",
				'penerbit' => "McGraw Hill",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1970"
			)
		);
		Book::create(
			array(
				'judul' => "Managing the data resource function",
				'pengarang' => "Richard L. Nolan : Editor",
				'ddc_code' => "658.403 8",
				'penerbit' => "West Publishing",
				'isbn' => "0829900039",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1974"
			)
		);
		Book::create(
			array(
				'judul' => "Operating system",
				'pengarang' => "Sudiyanto",
				'ddc_code' => "005.43",
				'penerbit' => "Yayasan Pembinaan Keluarga UPN  Veteran",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create( //140
			array(
				'judul' => "Principles of data processing",
				'pengarang' => "Robert A. Stern  Nancy B. Stern",
				'ddc_code' => "004",
				'penerbit' => "John Wiley & Sons, Inc",
				'edisi' => "2",
				'isbn' => "0471016969",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1979"
			)
		);
		Book::create(
			array(
				'judul' => "Digital circuits and microprocessors",
				'pengarang' => "Herbert Taub",
				'ddc_code' => "621.381 5",
				'penerbit' => "McGraw Hill",
				'isbn' => "070665958",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create(
			array(
				'judul' => "Information Processing",
				'pengarang' => "Marilyn Bohl",
				'ddc_code' => "005",
				'penerbit' => "Science Research Associates",
				'edisi' => "3",
				'isbn' => "0574212655",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create(
			array(
				'judul' => "Information systems : theory and practice",
				'pengarang' => "John  G.Burch  Felix R.Straler  Gary  Grudniski",
				'ddc_code' => "658.403 8",
				'penerbit' => "John Wiley & Sons, Inc",
				'edisi' => "2",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1979"
			)
		);
		Book::create(
			array(
				'judul' => "Introduction to IBM direct access storage devices",
				'pengarang' => "Marilyn Bohl",
				'ddc_code' => "005.74",
				'penerbit' => "Science Research Associates",
				'isbn' => "0574211403",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create(
			array(
				'judul' => "Fifty basic exercises",
				'pengarang' => "Jean-Pierre Lamoitier",
				'ddc_code' => "005.3",
				'penerbit' => "Sybex",
				'isbn' => "0895880563",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create(
			array(
				'judul' => "The home computer book",
				'pengarang' => "Len Buckwalter",
				'ddc_code' => "004",
				'penerbit' => "A Wallaby Book",
				'isbn' => "0671790293",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1978"
			)
		);
		Book::create(
			array(
				'judul' => "The ZX Spectrum : and How To get Most From it",
				'pengarang' => "Ian Sinclair",
				'ddc_code' => "005.265",
				'penerbit' => "Granada",
				'isbn' => "0246120185",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create(
			array(
				'judul' => "8085A CookBook",
				'pengarang' => "Christopher A Titus  David G. Larssen  Jonathan A.Titus",
				'ddc_code' => "621.391",
				'penerbit' => "Howard W.Sams & Co",
				'isbn' => "0672216973",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create(
			array(
				'judul' => "An introduction to linear programming and game theory",
				'pengarang' => "Paul R. Thie",
				'ddc_code' => "519.72",
				'penerbit' => "John Wiley & Sons, Inc",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1979"
			)
		);
		Book::create( //150
			array(
				'judul' => "Programming Microcomputers With PASCAL",
				'pengarang' => "M.D.Beer",
				'ddc_code' => "005.133",
				'penerbit' => "Granada",
				'isbn' => "0046116196",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create(
			array(
				'judul' => "Guide to fundamentals of application and system training",
				'pengarang' => "IBM",
				'ddc_code' => "005",
				'penerbit' => "International Business Machines",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create(
			array(
				'judul' => "Apple graphics games",
				'pengarang' => "Paul Coletta",
				'ddc_code' => "794.8",
				'penerbit' => "Reston Publishing",
				'isbn' => "0835903257",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create(
			array(
				'judul' => "A fortran IV primer",
				'pengarang' => "Elliott I. Organick",
				'ddc_code' => "005.133",
				'penerbit' => "Addison-Wesley",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1966"
			)
		);
		Book::create(
			array(
				'judul' => "Management P.",
				'pengarang' => "Eddy Santoso",
				'ddc_code' => "658",
				'penerbit' => "Akademi Teknik Komputer",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create(
			array(
				'judul' => "Structured cobol for data processing",
				'pengarang' => "Norman R. Lyons",
				'ddc_code' => "005.133",
				'penerbit' => "Glencoe/McGraw-Hill",
				'isbn' => "0024707708",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create(
			array(
				'judul' => "Business system buyer's guide",
				'pengarang' => "Adam Osborne  Steven Cook",
				'ddc_code' => "004",
				'penerbit' => "Osbourne",
				'isbn' => "0931988470",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create(
			array(
				'judul' => "Computer organization and programming",
				'pengarang' => "C. William Gear",
				'ddc_code' => "004",
				'penerbit' => "McGraw Hill",
				'edisi' => "3",
				'isbn' => "0070230420",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create(
			array(
				'judul' => "Prinsip dan teknik manajemen",
				'pengarang' => "Santanoe Kertonegoro",
				'ddc_code' => "658",
				'penerbit' => "Sine Nomine",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create(
			array(
				'judul' => "Computing with : fortran IV : a practical course",
				'pengarang' => "Donald M. Monro",
				'ddc_code' => "005.131",
				'penerbit' => "Edward  Arnold",
				'isbn' => "0713125462",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1977"
			)
		);
		Book::create( //160
			array(
				'judul' => "Business system analysis and design",
				'pengarang' => "Gary B. Shelly  Thomas J. Cashman",
				'ddc_code' => "005.12",
				'penerbit' => "Anaheim Publishing Company",
				'isbn' => "0882360434",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1975"
			)
		);
		Book::create(
			array(
				'judul' => "Linear Programming : methods and applications",
				'pengarang' => "Saul I. Gass",
				'ddc_code' => "519.72",
				'penerbit' => "McGraw Hill",
				'edisi' => "3",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1958"
			)
		);
		Book::create(
			array(
				'judul' => "Comprehensive computer studies",
				'pengarang' => "Peter Bishop",
				'ddc_code' => "005",
				'penerbit' => "Edward  Arnold",
				'isbn' => "071310371X",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create(
			array(
				'judul' => "COBOL : a structured approach",
				'pengarang' => "Thomas C. Richards  Robert S. Cheney",
				'ddc_code' => "005.133 [COB]",
				'penerbit' => "Charles  E.Merrill  publishing",
				'isbn' => "067508041X",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create(
			array(
				'judul' => "Methodical programming in Cobol",
				'pengarang' => "Ray Welland",
				'ddc_code' => "005.133 [COB]",
				'penerbit' => "Pitman Publishing",
				'edisi' => "1",
				'isbn' => "0273018205",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create(
			array(
				'judul' => "Computer programming : RPG II",
				'pengarang' => "Gary B. Shelly  Thomas J. Cashman",
				'ddc_code' => "005.133 [PRO]",
				'penerbit' => "Anaheim Publishing Company",
				'isbn' => "0882362267",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create(
			array(
				'judul' => "Fundamental of operating system",
				'pengarang' => "Andrew Martin Lister",
				'ddc_code' => "005.43",
				'penerbit' => "Macmillan",
				'edisi' => "2",
				'isbn' => "0333272870",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1990"
			)
		);
		Book::create(
			array(
				'judul' => "Fortran 77 : principles of programming",
				'pengarang' => "Jerrold L. Wagener",
				'ddc_code' => "005.133 [FOR]",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "0471044741",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create(
			array(
				'judul' => "370/360 Assembler language programming",
				'pengarang' => "Nancy Stern  Alden Sager  Robert A. Stern",
				'ddc_code' => "005.133 [PRO]",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "0471034290",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1979"
			)
		);
		Book::create(
			array(
				'judul' => "Readings in management information systems",
				'pengarang' => "Edited : Gordon B. Davis  Gordon C. Everest",
				'ddc_code' => "658.403 8",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070158355",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1976"
			)
		);
		Book::create( //170
			array(
				'judul' => "Fortran IV programming",
				'pengarang' => "Th. Widia S.",
				'ddc_code' => "005.133 [FOR]",
				'penerbit' => "STMIK Bina Nusantara",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1985"
			)
		);
		Book::create(
			array(
				'judul' => "Computer applications of numerical methods",
				'pengarang' => "Shan S. Kuo",
				'ddc_code' => "003.3",
				'penerbit' => "Addison-Wesley",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1972"
			)
		);
		Book::create(
			array(
				'judul' => "IBM system/34 source entry utility reference manual",
				'pengarang' => "International Business Machines",
				'ddc_code' => "005.245 [IBM]",
				'penerbit' => "IBM Corporation Pub.",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create(
			array(
				'judul' => "6502 applications book",
				'pengarang' => "Rodney Zaks",
				'ddc_code' => "005.36",
				'penerbit' => "Sybex",
				'isbn' => "0895880156",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create(
			array(
				'judul' => "Element of numerical analysis",
				'pengarang' => "Peter Henrici",
				'ddc_code' => "519.4",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "0471372382",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1964"
			)
		);
		Book::create(
			array(
				'judul' => "Linear programming : an emphasis on decision making",
				'pengarang' => "Ann J. Hughes  Dennis E. Grawiog",
				'ddc_code' => "519.72",
				'penerbit' => "Addison-Wesley",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1973"
			)
		);
		Book::create(
			array(
				'judul' => "Database : structured techniques for design, performance, and management with case studies",
				'pengarang' => "S. Atre",
				'ddc_code' => "005.740 68",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "0471052671",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create(
			array(
				'judul' => "Data communications and teleprocessing system",
				'pengarang' => "Trevor Housley",
				'ddc_code' => "Stephen F. Love.",
				'penerbit' => "Prentice Hall",
				'isbn' => "0131973681",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1979"
			)
		);
		Book::create(
			array(
				'judul' => "Systems Analysis",
				'pengarang' => "Andrew Parkin",
				'ddc_code' => "003",
				'penerbit' => "Edward  Arnold",
				'isbn' => "0713128003",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create(
			array(
				'judul' => "Inventory control",
				'pengarang' => "Stephen F. Love.",
				'ddc_code' => "658.787",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070387826",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1979"
			)
		);
		Book::create( //180
			array(
				'judul' => "Accounting and information systems",
				'pengarang' => "Joseph W. Wilkinson",
				'ddc_code' => "657.028 5",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "0471049867",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create(
			array(
				'judul' => "The art of computer programming : fundamental algorithms",
				'pengarang' => "Donald E. Knuth",
				'ddc_code' => "005.1",
				'penerbit' => "Addison-Wesley",
				'edisi' => "2",
				'isbn' => "0201038099",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1973"
			)
		);
		Book::create(
			array(
				'judul' => "A casebook for management information systems",
				'pengarang' => "Henry  C. Lucas, Jr.  Cyrus  F. Gibson",
				'ddc_code' => "658.403 8",
				'penerbit' => "McGraw Hill",
				'edisi' => "2",
				'isbn' => "007038939X",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create(
			array(
				'judul' => "Understanding Cobol ",
				'pengarang' => "Richard G. Peddicord",
				'ddc_code' => "005.133 [COB]",
				'penerbit' => "Alfred  publishing",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create(
			array(
				'judul' => "Modern data processing",
				'pengarang' => "Robert R. Arnold  Harold C. Hill  Aylmer V. Nichols",
				'ddc_code' => "004",
				'penerbit' => "John Wiley & Sons, Inc",
				'edisi' => "3",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1978"
			)
		);
		Book::create(
			array(
				'judul' => "Fortran : programs for scientists and engineers",
				'pengarang' => "Alan R. Miller",
				'ddc_code' => "005.133 [FOR]",
				'penerbit' => "Sybex",
				'isbn' => "0895880822",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create(
			array(
				'judul' => "Cobol programming : jilid II",
				'pengarang' => "Th. Widia S.  F.X. Soehartono",
				'ddc_code' => "005.133 [COB]",
				'penerbit' => "STMIK Bina Nusantara",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create(
			array(
				'judul' => "Cobol programming : jilid I",
				'pengarang' => "Th. Widia S.",
				'ddc_code' => "005.133 [COB]",
				'penerbit' => "STMIK Bina Nusantara",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create(
			array(
				'judul' => "Understanding fortran",
				'pengarang' => "Herbert R. Ludwig",
				'ddc_code' => "005.133 [FOR]",
				'penerbit' => "Alfred  publishing",
				'isbn' => "0882841483",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create(
			array(
				'judul' => "Kerangka dasar sistem informasi manajemen : bagian II struktur dan pengembangannya",
				'pengarang' => "Gordon B. Davis  Penterjemah  Bob Widyahartono",
				'ddc_code' => "658.403 801 1",
				'penerbit' => "Pustaka Binaman Pressindo",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create( //190
			array(
				'judul' => "Pengantar Fortran",
				'pengarang' => "Roger Hutty",
				'ddc_code' => "005.133 [FOR]",
				'penerbit' => "Erlangga",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create(
			array(
				'judul' => "The IBM personal computer",
				'pengarang' => "Robert J. Traister",
				'ddc_code' => "005.245",
				'penerbit' => "TAB Books",
				'isbn' => "0830626964",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create(
			array(
				'judul' => "Introductory finite mathematics with computing",
				'pengarang' => "William S. Dorn  Daniel D. McCracken",
				'ddc_code' => "510",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "0471219215",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1976"
			)
		);
		Book::create(
			array(
				'judul' => "Theory and problems of linear algebra",
				'pengarang' => "Seymour Lipschutz",
				'ddc_code' => "512.5",
				'penerbit' => "McGraw Hill",
				'isbn' => "007990123",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1968"
			)
		);
		Book::create(
			array(
				'judul' => "The world processing handbook",
				'pengarang' => "Russell Allen Stultz",
				'ddc_code' => "652.5",
				'penerbit' => "Prentice Hall",
				'isbn' => "0139634541",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create(
			array(
				'judul' => "Troubleshooting and repairing personal computers",
				'pengarang' => "Art Margolis",
				'ddc_code' => "621.398",
				'penerbit' => "TAB Books",
				'edisi' => "1",
				'isbn' => "0830601392",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create(
			array(
				'judul' => "Aljabar linier",
				'pengarang' => "R. Darodjat  M. Margha",
				'ddc_code' => "512.5",
				'penerbit' => "STMIK Bina Nusantara",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create(
			array(
				'judul' => "Design of digital computers : an introduction",
				'pengarang' => "Hans W. Gschwind",
				'ddc_code' => "621.392",
				'penerbit' => "Springer-Verlag",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1967"
			)
		);
		Book::create(
			array(
				'judul' => "6502 user's manual",
				'pengarang' => "Joseph J. Carr",
				'ddc_code' => "004",
				'penerbit' => "Reston Publishing",
				'isbn' => "0835970027",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create( //200
			array(
				'judul' => "Behavior in organizations",
				'pengarang' => "Lyman W. Porter  Edward E. Lawler III  J. Richard Hackman",
				'ddc_code' => "658",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070505276",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1975"
			)
		);
		Book::create( 
			array(
				'judul' => "Information systems design",
				'pengarang' => "Cyril H. P. Brookes  Phillip J. Grouse  D. Ross Jeffery [et.al]",
				'ddc_code' => "004.21",
				'penerbit' => "Prentice Hall",
				'isbn' => "0724806415",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create( 
			array(
				'judul' => "Golden delicious games for the APPLE Computer",
				'pengarang' => "Howard Franklin  Joanne Koltnow  Leroy Finkel",
				'ddc_code' => "005.265",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "0471090832",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create( 
			array(
				'judul' => "The art of computer programming. volume 3 sorting and searching",
				'pengarang' => "Donald E. Knuth",
				'ddc_code' => "005.1",
				'penerbit' => "Addison-Wesley",
				'isbn' => "020103803X",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1973"
			)
		);
		Book::create( 
			array(
				'judul' => "Perilaku organisasi : konsep dasar dan aplikasinya",
				'pengarang' => "Miftah Thoha",
				'ddc_code' => "658",
				'penerbit' => "CV . Rajawali",
				'isbn' => "9794210153",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create( 
			array(
				'judul' => "Pascal for Fortran programmers",
				'pengarang' => "Ronald H. Perrott  Donald C. S. Allison",
				'ddc_code' => "005.133",
				'penerbit' => "Computer Scince Press",
				'isbn' => "0914894099",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create( 
			array(
				'judul' => "A guide to PL/I and structured programming",
				'pengarang' => "Seymour V. Pollack  Theodor D. Sterling",
				'ddc_code' => "005.133 [PL]",
				'penerbit' => "Holt, Rinehart  and  Winston, inc",
				'edisi' => "3",
				'isbn' => "003558212",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create( 
			array(
				'judul' => "Principles of compiler design",
				'pengarang' => "Alfred V. Aho  Jeffrey D. Ullman",
				'ddc_code' => "005.453",
				'penerbit' => "Addison-Wesley",
				'isbn' => "0201100738",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1977"
			)
		);
		Book::create( 
			array(
				'judul' => "Organizations : theory and behavior",
				'pengarang' => "Herbert G. Hicks  C. Ray Gullett",
				'ddc_code' => "658.001",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070287309",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1975"
			)
		);
		Book::create( 
			array(
				'judul' => "Numerical Analysis : with the TI-99/4A, Commodore 64, Apple II Plus/IIe, TRS-80 model I/III",
				'pengarang' => "H. R Meck",
				'ddc_code' => "519.402 85",
				'penerbit' => "Prentice Hall",
				'isbn' => "0136266312",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create( //210
			array(
				'judul' => "Computers in action : how computers work",
				'pengarang' => "Donald D. Spencer",
				'ddc_code' => "005",
				'penerbit' => "Hayden Book Company",
				'edisi' => "2",
				'isbn' => "0810457571",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1974"
			)
		);
		Book::create( 
			array(
				'judul' => "Management and organization",
				'pengarang' => "Louis A. Allen",
				'ddc_code' => "658",
				'penerbit' => "McGraw Hill",
				'isbn' => "007Y850127",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1958"
			)
		);
		Book::create( 
			array(
				'judul' => "Problem solving in Apple Pascal",
				'pengarang' => "Lowell A. Carmony ... [et al.]",
				'ddc_code' => "005.265",
				'penerbit' => "Computer Science Press",
				'isbn' => "0881750069",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create( 
			array(
				'judul' => "Writing with a word processor : communication in the computer age",
				'pengarang' => "Eric D. Brown",
				'ddc_code' => "652",
				'penerbit' => "Reston Publishing",
				'isbn' => "0835988570",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create( 
			array(
				'judul' => "Microprocessor system design concepts",
				'pengarang' => "Nikitas A. Alexandridis",
				'ddc_code' => "621.392",
				'penerbit' => "Computer Science Press",
				'isbn' => "0914894668",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create( 
			array(
				'judul' => "Accounting information systems : theory and practice",
				'pengarang' => "Frederick H. Wu",
				'ddc_code' => "657.028 5",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070721211",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create( 
			array(
				'judul' => "How to prepare for the graduate management admission test",
				'pengarang' => "Michael Randall  Morris Bramson  Morton Selub",
				'ddc_code' => "658.007 6",
				'penerbit' => "Harcourt  Brace  Jovanovich",
				'isbn' => "0156000202",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create( 
			array(
				'judul' => "Information systems concepts for management",
				'pengarang' => "Henry C. Lucas, Jr.",
				'ddc_code' => "658.403 88",
				'penerbit' => "McGraw Hill",
				'edisi' => "2",
				'isbn' => "0070389241",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create( 
			array(
				'judul' => "Statistical Programs in Basic",
				'pengarang' => "Ronald D. Schwartz  David T. Basso",
				'ddc_code' => "005.302 1",
				'penerbit' => "Reston Publishing",
				'isbn' => "0835971066",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1985"
			)
		);
		Book::create( 
			array(
				'judul' => "Designing microcomputer systems",
				'pengarang' => "Udo W. Pooch  Rahul Chattergy",
				'ddc_code' => "621.392",
				'penerbit' => "Hayden Book Company",
				'isbn' => "0810456796",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1979"
			)
		);
		Book::create( //220
			array(
				'judul' => "IBM PC COBOL",
				'pengarang' => "William J. Atkinson Jr.  Paul A. De Sanctis",
				'ddc_code' => "005.133",
				'penerbit' => "Reston Publishing",
				'isbn' => "0835930513",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1985"
			)
		);
		Book::create( 
			array(
				'judul' => "Managing  individual and group behaviuor in organizations",
				'pengarang' => "Daniel C. Feldman  Hugh J.Arnold",
				'ddc_code' => "658.3",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070203865",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create( 
			array(
				'judul' => "Overhead Express : User Guide",
				'pengarang' => "Business & Professional Software",
				'ddc_code' => "005.133Leo Brodie",
				'penerbit' => "Business & Professional Software",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create( 
			array(
				'judul' => "Disk operating system version 3.0",
				'pengarang' => "IBM",
				'ddc_code' => "005.43",
				'penerbit' => "International Business Machines",
				'edisi' => "1",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create( 
			array(
				'judul' => "Thinking forth : a language and philosophy for solving problems",
				'pengarang' => "Leo Brodie",
				'ddc_code' => "005.133",
				'penerbit' => "Prentice Hall",
				'isbn' => "0139175687",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create( 
			array(
				'judul' => "Basic computer programs in science and engineering",
				'pengarang' => "Jules H. Gilder",
				'ddc_code' => "620.028 5",
				'penerbit' => "Hayden Book Company",
				'isbn' => "0810407612",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
		Book::create( 
			array(
				'judul' => "System analysis and project management",
				'pengarang' => "David I. Cleland  William R. King",
				'ddc_code' => "658.403 2",
				'penerbit' => "McGraw Hill",
				'edisi' => "3",
				'isbn' => "0070113114",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create( 
			array(
				'judul' => "Systems analysis and design : a structured approach",
				'pengarang' => "William S. Davis",
				'ddc_code' => "004.21",
				'penerbit' => "Addison-Wesley",
				'isbn' => "0201102714",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create( 
			array(
				'judul' => "Office systems",
				'pengarang' => "Samuel Jay Kalow  Ercole Rosa",
				'ddc_code' => "651.8",
				'penerbit' => "Prentice Hall",
				'isbn' => "0136331491",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create( 
			array(
				'judul' => "Language arts computer book : how to guide for teachers",
				'pengarang' => "Wayne Dickson  Michael W. Raymond",
				'ddc_code' => "428.402 85",
				'penerbit' => "Reston Publishing",
				'isbn' => "0835939413",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create( //230
			array(
				'judul' => "Inside the IBM PC : access to advanced features and programming",
				'pengarang' => "Peter Norton",
				'ddc_code' => "005.265",
				'penerbit' => "Prentice Hall",
				'isbn' => "0893035564",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create( 
			array(
				'judul' => "Theory and problems of programming with structured cobol",
				'pengarang' => "Lawrence R. Newcomer",
				'ddc_code' => "005.133",
				'penerbit' => "McGraw Hill",
				'isbn' => "007037998X",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create( 
			array(
				'judul' => "Managing behavior in organization : Text, cases, readings",
				'pengarang' => "Leonard A. Schlesinger  Robert G. Eccles  John J. Gabarro",
				'ddc_code' => "658.001",
				'penerbit' => "McGraw Hill",
				'isbn' => "0070553327",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create( 
			array(
				'judul' => "PC graphics charts, graphs, games and art on the IBM PC",
				'pengarang' => "Dick Conklin",
				'ddc_code' => "006.676 5",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "0471892076",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create( 
			array(
				'judul' => "Accounting the basis for business decisions",
				'pengarang' => "Walter B. Meigs  Robert F. Meigs",
				'ddc_code' => "657",
				'penerbit' => "McGraw Hill",
				'edisi' => "9",
				'isbn' => "0070422532",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1990"
			)
		);
		Book::create( 
			array(
				'judul' => "Introduction to computers",
				'pengarang' => "Gordon B Davis",
				'ddc_code' => "004",
				'penerbit' => "McGraw Hill",
				'edisi' => "3",
				'isbn' => "0070662460",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1965"
			)
		);
		Book::create( 
			array(
				'judul' => "Programming language : design and implementation",
				'pengarang' => "Terrence W. Pratt",
				'ddc_code' => "005.133",
				'penerbit' => "Prentice Hall",
				'edisi' => "2",
				'isbn' => "0876923945",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1985"
			)
		);
		Book::create( 
			array(
				'judul' => "Distributed processing and data communication",
				'pengarang' => "Daniel R. McGlynn",
				'ddc_code' => "004.6",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "0471018864",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1978"
			)
		);
		Book::create( 
			array(
				'judul' => "File techniques for data base organization in COBOL",
				'pengarang' => "LeRoy F. Johnson  Rodney H. Cooper",
				'ddc_code' => "005.133",
				'penerbit' => "Prentice Hall",
				'isbn' => "0133140393",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1981"
			)
		);
		Book::create( 
			array(
				'judul' => "Spreadsheet software from VisiCalc to 1-2-3",
				'pengarang' => "LeRoy F. Johnson  Rodney H. Cooper",
				'ddc_code' => "005.3",
				'penerbit' => "Que Corporation",
				'isbn' => "088022035x",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create( //240
			array(
				'judul' => "RPG II and RPG III with business applications",
				'pengarang' => "Stanley E. Myers",
				'ddc_code' => "005.133 [PRO]",
				'penerbit' => "Reston Publishing",
				'isbn' => "0835967530",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1982"
			)
		);
		Book::create( 
			array(
				'judul' => "Computers today",
				'pengarang' => "Donald H. Sanders",
				'ddc_code' => "004",
				'penerbit' => "McGraw Hill",
				'edisi' => "2",
				'isbn' => "0070547017",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1985"
			)
		);
		Book::create( 
			array(
				'judul' => "Advanced programming : a practical course",
				'pengarang' => "D.W. Barron  J.M. Bishop",
				'ddc_code' => "621.39",
				'penerbit' => "John Wiley & Sons, Inc",
				'isbn' => "0471903191",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1984"
			)
		);
		Book::create( 
			array(
				'judul' => "Applied statistics for business and economics",
				'pengarang' => "Henrick J. Malik  Kenneth Mullen",
				'ddc_code' => "519.5",
				'penerbit' => "Addison-Wesley",
				'isbn' => "0201044102",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1975"
			)
		);
		Book::create( 
			array(
				'judul' => "Microsoft Cobol : Reference manual",
				'pengarang' => "Microsoft",
				'ddc_code' => "005.133 [COB]",
				'penerbit' => "Sine Nomine",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1958"
			)
		);
		Book::create( 
			array(
				'judul' => "The C primer",
				'pengarang' => "Les Hancock  Morris Krieger",
				'ddc_code' => "005.133 [CLA]",
				'penerbit' => "McGraw Hill",
				'edisi' => "2",
				'isbn' => "007025995X",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1986"
			)
		);
		Book::create( 
			array(
				'judul' => "Problem solving with the programmable calculator : puzzle, games & simulation with math & science application",
				'pengarang' => "David L. Dunlop  Thomas F. Sigmund",
				'ddc_code' => "510.285",
				'penerbit' => "Prentice Hall",
				'isbn' => "0574213201",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create( 
			array(
				'judul' => "Police-community relations",
				'pengarang' => "Edited by : Paul M. Whisenand   James L. Cline  George T. Felkenes",
				'ddc_code' => "306.28",
				'penerbit' => "Goodyear Publishing Company",
				'isbn' => "0876207042",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1974"
			)
		);
		Book::create( 
			array(
				'judul' => "Database processing : fundamentals, design, implementation",
				'pengarang' => "David M. Kroenke",
				'ddc_code' => "005.74",
				'penerbit' => "Science Research Associates",
				'edisi' => "2",
				'isbn' => "0137213409",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1983"
			)
		);
		Book::create( 
			array(
				'judul' => "Foundations of financial management",
				'pengarang' => "Stanley B. Block  Geoffrey A. Hirt",
				'ddc_code' => "658.15",
				'penerbit' => "Irwin",
				'edisi' => "4",
				'isbn' => "0256036225",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1997"
			)
		);
		Book::create( //250
			array(
				'judul' => "Introduction to the computer : an integrative approach",
				'pengarang' => "Jeffrey Frates  William Moldrup",
				'ddc_code' => "004",
				'penerbit' => "Prentice Hall",
				'isbn' => "0134803019",
				'book_image_name' => 'placeholder.jpg',
				'tahun' => "1980"
			)
		);
	}
} 	