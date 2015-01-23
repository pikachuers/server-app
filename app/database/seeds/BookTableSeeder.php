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
				'judul' => 'Theory and problems of data processing',
				'pengarang' => 'Martin M. Lipschutz  Seymour Lipschutz',
				'dcc_code' => '004',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070379831', //nullable
				'tahun' => '1981'
			)
		);
		Book::create( //2
			array(
				'judul' => 'The basic handbook : encyclopedia of the basic computer language',
				'pengarang' => 'David A. Lien',
				'dcc_code' => '005.133 03',
				'penerbit' => 'Compusoft Publishing',
				'edisi' => '2' //nullable
				'isbn' => '0932760058', //nullable
				'tahun' => '1981'
			)
		);
		Book::create( //3
			array(
				'judul' => 'Business data processing systems',
				'pengarang' => 'Lawrence S.Orilia  Nancy B.Stern  Robert  A. Stern',
				'dcc_code' => '658.05',
				'penerbit' => 'John Wiley & Sons, Inc',
				'edisi' => '2' //nullable
				'isbn' => '0471042544', //nullable
				'tahun' => '1977'
			)
		);
		Book::create( //4
			array(
				'judul' => 'Introducing systems design',
				'pengarang' => 'Enid Squire',
				'dcc_code' => '005.120 28',
				'penerbit' => 'Addison-Wesley',
				'isbn' => '0201074214', //nullable
				'tahun' => '1980'
			)
		);
		Book::create( //5
			array(
				'judul' => 'A simplified  guide to structured cobol programming',
				'pengarang' => 'Daniel D. McCracken',
				'dcc_code' => '005.133',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '0471582840', //nullable
				'tahun' => '1976'
			)
		);
		Book::create( //6
			array(
				'judul' => 'Learning to program in structured cobol : part 2',
				'pengarang' => 'Timothy R. Lister  Edward Yourdon',
				'dcc_code' => '005.133',
				'penerbit' => 'Your Don Press',
				'isbn' => '0917072030', //nullable
				'tahun' => '1978'
			)
		);
		Book::create( //7
			array(
				'judul' => 'Problem solving and structured programming in Pascal',
				'pengarang' => 'Elliot B. Koffman',
				'dcc_code' => '005.133',
				'penerbit' => 'Addison-Wesley',
				'isbn' => '0201038935', //nullable
				'tahun' => '1981'
			)
		);
		Book::create( //8
			array(
				'judul' => 'Fortran for IBM system/360 : a programmed instruction course',
				'pengarang' => 'S. C. Plumb  David E. Napper',
				'dcc_code' => '005.133',
				'penerbit' => 'Science  Research  Associates ',
				'tahun' => '1965'
			)
		);
		Book::create( //9
			array(
				'judul' => 'Understanding Fortran',
				'pengarang' => 'Michel Boillot',
				'dcc_code' => '005.133',
				'penerbit' => 'West Publishing',
				'edisi' => '2',
				'isbn' => '0829903550', //nullable
				'tahun' => '1978'
			)
		);
		Book::create( //10
			array(
				'judul' => 'An introduction to programming and problem solving with Pascal',
				'pengarang' => '-',
				'dcc_code' => '005.133',
				'penerbit' => 'John Wiley & Sons, Inc',
				'edisi' => '2',
				'isbn' => '0471804479', //nullable
				'tahun' => '1982'
			)
		);
		Book::create( //11
			array(
				'judul' => 'An introduction to programming and problem solving with Pascal',
				'pengarang' => 'G. Michael Schneider  Steven W. Weingart  David M. Perlman',
				'dcc_code' => '005.133',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '0471044318', //nullable
				'tahun' => '1978'
			)
		);
		Book::create( //12
			array(
				'judul' => 'Theory and problems of statistics in SI units ',
				'pengarang' => 'Murray R. Spiegel  R. W. Boxer',
				'dcc_code' => '519.5',
				'penerbit' => 'McGraw Hill',
				'edisi' => '1',
				'tahun' => '1961'
			)
		);
		Book::create( //13
			array(
				'judul' => 'Basic programming',
				'pengarang' => 'John G. Kemeny  Thomas E. Kurtz',
				'dcc_code' => '005.133',
				'penerbit' => 'John Wiley & Sons, Inc',
				'edisi' => '3',
				'isbn' => '0471018635', //nullable
				'tahun' => '1980'
			)
		);
		Book::create( //14
			array(
				'judul' => 'Fortran 77 : featuring structured programming',
				'pengarang' => 'Loren P. Meissner  Elliott I. Organick',
				'dcc_code' => '005.133',
				'penerbit' => 'Addison-Wesley',
				'isbn' => '020105499X', //nullable
				'tahun' => '1963'
			)
		);
		Book::create( //15
			array(
				'judul' => 'Business data processing and systems analysis',
				'pengarang' => 'Pete Kilgannon',
				'dcc_code' => '658.403 2',
				'penerbit' => 'Edward  Arnold',
				'isbn' => '0713127554', //nullable
				'tahun' => '1980'
			)
		);
		Book::create( //16
			array(
				'judul' => 'Computer games : for business, school and home for TRS-80 level II basic',
				'pengarang' => 'J. Victor Nahigian  William S. Hodges',
				'dcc_code' => '793.7',
				'penerbit' => 'Winthrop',
				'isbn' => '0876261659', //nullable
				'tahun' => '1980'
			)
		);
		Book::create( //17
			array(
				'judul' => 'The structured programming cookbook : a productivity tool for the COBOL programmer',
				'pengarang' => 'Paul Noll',
				'dcc_code' => '005.133 [COB]',
				'penerbit' => 'Mike Murach & Associates',
				'tahun' => '1978'
			)
		);
		Book::create(  //18
			array(
				'judul' => 'Learning to program in structured Cobol : part 1',
				'pengarang' => 'Edward Yourdon  Chris Gane  Trish Sarson',
				'dcc_code' => '005.3',
				'penerbit' => 'Your Don Press',
				'isbn' => '091707212X', //nullable
				'tahun' => '1987'
			)
		);
		//colomn 20, number 19 = //18
		Book::create(  //19
			array(
				'judul' => 'Computer Graphic : With 29 ready to-ran programs',
				'pengarang' => 'David Chance',
				'dcc_code' => '006.68',
				'penerbit' => 'TAB Books',
				'isbn' => '0830612769', //nullable
				'tahun' => '1981'
			)
		);
		Book::create( //20
			array(
				'judul' => 'Fortran IV for business and general applications',
				'pengarang' => 'Harice L. Seeds',
				'dcc_code' => '005.133',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '0471771090', //nullable
				'tahun' => '1975'
			)
		);
		Book::create( //21
			array(
				'judul' => 'ANSI FORTRAN IV A Structured Programming Approacch',
				'pengarang' => 'J. W. Perry Cole',
				'dcc_code' => '005.133',
				'penerbit' => 'Wm. C. Brown',
				'isbn' => '0697081257', //nullable
				'tahun' => '1978'
			)
		);
		Book::create( //22
			array(
				'judul' => 'Business programming : fortran  IV',
				'pengarang' => 'Nesa L abbe Wu', //L'abbe (seharusnya)
				'dcc_code' => '005.133 [FOR]',
				'penerbit' => 'Wm. C. Brown',
				'edisi' => '2',
				'isbn' => '0697081230', //nullable
				'tahun' => '1977'
			)
		);
		Book::create( //23
			array(
				'judul' => 'Theory and problems of programming with fortran : including structured fortran',
				'pengarang' => 'Seymour Lipschutz  Arthur Poe',
				'dcc_code' => '005.133',
				'penerbit' => 'McGraw Hill',
				'isbn' => '007037984X', //nullable
				'tahun' => '1978'
			)
		);
		Book::create( //24
			array(
				'judul' => 'Structured ANS COBOL : part 2 an advanced course',
				'pengarang' => 'Mike Murach  Paul Noll',
				'dcc_code' => '005.133',
				'penerbit' => 'Mike Murach & Associates',
				'tahun' => '1979'
			)
		);
		Book::create( //25
			array(
				'judul' => 'Linear Programming : methods and applications',
				'pengarang' => 'Saul I. Gass',
				'dcc_code' => '519.72',
				'penerbit' => 'McGraw Hill',
				'edisi' => '3',
				'tahun' => '1958'
			)
		);
		Book::create( //26
			array(
				'judul' => 'Programming assembler language',
				'pengarang' => 'Peter Abel',
				'dcc_code' => '005.456',
				'penerbit' => 'Reston Publishing',
				'isbn' => '083595658X', //nullable
				'tahun' => '1979'
			)
		);
		Book::create( //27
			array(
				'judul' => 'RPG II with business applications',
				'pengarang' => 'Stanley E. Myers',
				'dcc_code' => '005.133',
				'penerbit' => 'Reston Publishing',
				'isbn' => '0835963039', //nullable
				'tahun' => '1979'
			)
		);
		Book::create( //28
			array(
				'judul' => 'Structured ANS COBOL : part 1 a course for novices',
				'pengarang' => 'Mike Murach Paul Noll',
				'dcc_code' => '005.133',
				'penerbit' => 'Mike Murach & Associates',
				'tahun' => '1979'
			)
		);
		Book::create( //29
			array(
				'judul' => 'IBM guide to Cobol system/38, system/34, series/1 5280',
				'pengarang' => 'International Business Machines Corporation',
				'dcc_code' => '005.133 [COB]',
				'penerbit' => 'International Business Machines',
				'tahun' => '1982'
			)
		);
		Book::create( //30
			array(
				'judul' => 'Cobol - 80 user s guide, reference manual',//user's
				'pengarang' => 'Microsoft',
				'dcc_code' => '005.133 [COB]',
				'penerbit' => 'Microsoft Press', //nullable
				'tahun' => '1980'
			)
		);
		Book::create( //31
			array(
				'judul' => 'Programming languages : paradigm and practice',
				'pengarang' => 'Doris Appleby',
				'dcc_code' => '005.13',
				'penerbit' => 'McGraw Hill',
				'tahun' => '1991'
			)
		);
		Book::create( //32
			array(
				'judul' => 'Data file programming in basic',
				'pengarang' => 'Leroy Finkel  Jerald R. Brown',
				'dcc_code' => '005.133 [BAS]',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '047108333X', //nullable
				'tahun' => '1981'
			)
		);
		Book::create( //33
			array(
				'judul' => 'The Pascal tutor',
				'pengarang' => 'The Denver Software Company',
				'dcc_code' => '005.133 [PAS]',
				'penerbit' => 'The Denver Software Company ',
				'tahun' => '1981'
			)
		);
		Book::create( //34
			array(
				'judul' => 'Theory and problems of probability and statistics',
				'pengarang' => 'Murray R. Spiegel',
				'dcc_code' => '519.2',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070990301', //nullable
				'tahun' => '1982'
			)
		);
		Book::create( //35
			array(
				'judul' => 'A simplified  guide to structured cobol programming',
				'pengarang' => 'Daniel D. McCracken',
				'dcc_code' => '005.133',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '0471582840', //nullable
				'tahun' => '1976'
			)
		);
		Book::create( //36
			array(
				'judul' => 'Digital computer basics',
				'pengarang' => 'NAVAL Education and Training command',
				'dcc_code' => '004',
				'penerbit' => 'Naval  education and training command',
				'tahun' => '1978'
			)
		);
		Book::create( //37
			array(
				'judul' => 'Business data processing and systems analysis',
				'pengarang' => 'Pete Kilgannon',
				'dcc_code' => '658.403 2',
				'penerbit' => 'Edward  Arnold',
				'isbn' => '0713127554', //nullable
				'tahun' => '1980'
			)
		);
		Book::create( //38
			array(
				'judul' => 'Digital systems fundamentals',
				'pengarang' => 'John M. Motil',
				'dcc_code' => '621.39',
				'penerbit' => 'McGraw Hill',
				'tahun' => '1972'
			)
		);
		Book::create( //39
			array(
				'judul' => 'Computer architecture and organization',
				'pengarang' => 'John P. Hayes',
				'dcc_code' => '004.22',
				'penerbit' => 'McGraw Hill',
				'edisi' => '2',
				'isbn' => '0070273553', //nullable
				'tahun' => '1988'
			)
		);
		Book::create( //40
			array(
				'judul' => 'Database design',
				'pengarang' => 'Gio Wiederhold',
				'dcc_code' => '005.12',
				'penerbit' => 'McGraw Hill',
				'isbn' => '007070130x', //nullable
				'tahun' => '1977'
			)
		);
		Book::create( //41
			array(
				'judul' => 'The 8086-8088 : primer : an introduction to their architecture, system design and programming',
				'pengarang' => 'Stephen P. Morse',
				'dcc_code' => '004.165',
				'penerbit' => 'Intel  corporation',
				'edisi' => '2',
				'tahun' => '1972'
			)
		);
		Book::create( //42
			array(
				'judul' => 'Elementary numerical analysis : an algorithmic approach',
				'pengarang' => 'S. D Conte  Carl De Boor',
				'dcc_code' => '519.4',
				'penerbit' => 'McGraw Hill',
				'edisi' => '3',
				'isbn' => '0070662282', //nullable
				'tahun' => '1980'
			)
		);
		Book::create( //43
			array(
				'judul' => 'Apple  graphics &  Arcade game design',
				'pengarang' => 'Jeffrey  Stanton',
				'dcc_code' => '006.676 5',
				'penerbit' => 'McGraw Hill',
				'tahun' => '1982'
			)
		);
		Book::create(  //44
			array(
				'judul' => 'Operating systems : a systematic view',
				'pengarang' => 'William S. Davis',
				'dcc_code' => '005.43',
				'penerbit' => 'Addison-Wesley',
				'edisi' => '2',
				'isbn' => '0201111160', //nullable
				'tahun' => '1983'
			)
		);
		Book::create(  //45
			array(
				'judul' => 'Compiler construction for digital computers',
				'pengarang' => 'David Gries',
				'dcc_code' => '005.453',
				'penerbit' => 'John Wiley & Sons, Inc',
				'tahun' => '1971'
			)
		);
		Book::create( //46
			array(
				'judul' => 'Programming languages',
				'pengarang' => 'Allen B. Tucker Jr',
				'dcc_code' => '005.13',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070654158', //nullable
				'tahun' => '1977'
			)
		);
		Book::create( //47
			array(
				'judul' => 'Introduction to operations research and management science : a general systems approach',
				'pengarang' => 'James L. Riggs  Michael S. Inoue',
				'dcc_code' => '658.403 4',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070528705', //nullable
				'tahun' => '1975'
			)
		);
		Book::create( //48
			array(
				'judul' => 'Principles of data-base management',
				'pengarang' => 'James Martin',
				'dcc_code' => '005.74',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0137089171', //nullable
				'tahun' => '1976'
			)
		);
		Book::create( //49
			array(
				'judul' => 'An introductory approach to operations research',
				'pengarang' => 'Robert J. Thierauf',
				'dcc_code' => '658.403 4',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '0471031259', //nullable
				'tahun' => '1978'
			)
		);
		Book::create( //50
			array(
				'judul' => 'Accounting information systems and business organizations',
				'pengarang' => 'Barry E. Cushing',
				'dcc_code' => '657.028 5',
				'penerbit' => 'Addison-Wesley',
				'edisi' => '2',
				'isbn' => '02010106X', //nullable
				'tahun' => '1978'
			)
		);
		Book::create( //51
			array(
				'judul' => 'Introduction to computer programming ANSI cobol',
				'pengarang' => 'Gary B. Shelly  Thomas J. Cashman',
				'dcc_code' => '005.133',
				'penerbit' => 'Anaheim Publishing Company',
				'isbn' => '0882361031', //nullable
				'tahun' => '1978'
			)
		);
		Book::create( //52
			array(
				'judul' => 'Management science : an introduction to modern quantitative analysis and decision making.',
				'pengarang' => 'Gerald.E  Thompson',
				'dcc_code' => '658.403',
				'penerbit' => 'McGraw Hill',
				'tahun' => '1976'
			)
		);
		Book::create( //53
			array(
				'judul' => 'Information systems through cobol',
				'pengarang' => 'Andreas S. Philippakis  Leonard J. Kazmier',
				'dcc_code' => '658.403',
				'penerbit' => 'McGraw Hill ',
				'edisi' => '2',
				'isbn' => '0070497915', //nullable
				'tahun' => '1982'
			)
		);
		Book::create( //54
			array(
				'judul' => 'Strategic planning for MIS',
				'pengarang' => 'Ephraim R. McLean  John V. Soden',
				'dcc_code' => '658.403',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '0471585629', //nullable
				'tahun' => '1977'
			)
		);
		Book::create( //55
			array(
				'judul' => 'Management',
				'pengarang' => 'Herbert G. Hicks  C. Ray Gullett',
				'dcc_code' => '658',
				'penerbit' => 'McGraw Hill',
				'edisi' => '4',
				'isbn' => '0070287732', //nullable
				'tahun' => '1967'
			)
		);
		Book::create( //56
			array(
				'judul' => 'Schaum s outline series theory and problems of operations research',//Schaum's
				'pengarang' => 'Richard Bronson',
				'dcc_code' => '001.422',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070079773', //nullable
				'tahun' => '1982'
			)
		);
		Book::create( //57
			array(
				'judul' => 'A user guide to the UNIX system',
				'pengarang' => 'Rebecca Thomas  Jean Yates',
				'dcc_code' => '005.422 82',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0931988713', //nullable
				'tahun' => '1982'
			)
		);
		Book::create( //58
			array(
				'judul' => 'The analysis, design, and implementation of information system',
				'pengarang' => 'Henry C. Lucas, Jr.',
				'dcc_code' => '005.74',
				'penerbit' => 'McGraw Hill',
				'edisi' => '2',
				'isbn' => '0070389276', //nullable
				'tahun' => '1981'
			)
		);
		Book::create( //59
			array(
				'judul' => 'Fundamentals of computer science',
				'pengarang' => 'Andrew J. T. Colin',
				'dcc_code' => '004',
				'penerbit' => 'Macmillan',
				'isbn' => '0333305035', //nullable
				'tahun' => '1980'
			)
		);
		Book::create( //60
			array(
				'judul' => 'Fundamentals of data structures',
				'pengarang' => 'Ellis Horowitz  Sartaj Sahni',
				'dcc_code' => '005.73',
				'penerbit' => 'Computer Science Press',
				'isbn' => '091489420', //nullable
				'tahun' => '1986'
			)
		);
		Book::create( //61
			array(
				'judul' => 'Accounting system : procedures and methods',
				'pengarang' => 'Cecil Gillespie',
				'dcc_code' => '657.028 5',
				'penerbit' => 'Prentice Hall',
				'edisi' => '3',
				'isbn' => '0876921713', //nullable
				'tahun' => '1982'
			)
		);
		Book::create( //62
			array(
				'judul' => 'Operating systems',
				'pengarang' => 'Stuart E. Madnick  John J. Donovan',
				'dcc_code' => '005.43',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070394555', //nullable
				'tahun' => '1982'
			)
		);
		Book::create(  //63
			array(
				'judul' => 'Structured Cobol : A Modern Approach',
				'pengarang' => 'Henry Mullish',
				'dcc_code' => '005.133',
				'penerbit' => 'Harper & Row',
				'isbn' => '0060446528', //nullable
				'tahun' => '1983'
			)
		);
		Book::create(  //64
			array(
				'judul' => 'The A to Z book of computer games',
				'pengarang' => 'Thomas C. McIntire',
				'dcc_code' => '794.8',
				'penerbit' => 'TAB Books',
				'isbn' => '083061062', //nullable
				'tahun' => '1979'
			)
		);
		Book::create(  //65
			array(
				'judul' => 'Introduction to applied numerical analysis',
				'pengarang' => 'Richard W. Hamming',
				'dcc_code' => '519.4',
				'penerbit' => 'McGraw Hill',
				'tahun' => '1971'
			)
		);
		Book::create(  //66
			array(
				'judul' => 'Pascal programs : for scientists and engineers',
				'pengarang' => 'Alan R. Miller',
				'dcc_code' => '005.133',
				'penerbit' => 'Sybex',
				'isbn' => '089588058X', //nullable
				'tahun' => '1981'
			)
		);
		Book::create(  //67
			array(
				'judul' => 'Apple II-6502 Assembly language tutor',
				'pengarang' => 'Richard Haskell',
				'dcc_code' => '005.265',
				'penerbit' => 'Sine Nomine',
				'tahun' => '-'
			)
		);
		Book::create(  //68
			array(
				'judul' => 'Digital logic and computer design',
				'pengarang' => 'M. Morris Mano',
				'dcc_code' => '621.392',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0132143380', //nullable
				'tahun' => '1979'
			)
		);
		Book::create(  //69
			array(
				'judul' => 'Cobol compiler',
				'pengarang' => 'Microsoft',
				'dcc_code' => '005.133 [COB]',
				'penerbit' => 'Microsoft Press',
				'tahun' => '-'
			)
		);
		Book::create(  //70
			array(
				'judul' => 'Computers Management & Information',
				'pengarang' => 'David Firnberg',
				'dcc_code' => '005',
				'penerbit' => 'George Allen & Unwin',
				'isbn' => '0046581421', //nullable
				'tahun' => '1973'
			)
		);
		Book::create( //71
			array(
				'judul' => 'Schaum s outline of theory and  problems of accounting II',//Schaum's
				'pengarang' => 'James A. Cashin  Joel J. Lerner',
				'dcc_code' => '657',
				'penerbit' => 'McGraw Hill',
				'edisi' => '2',
				'isbn' => '007010252X', //nullable
				'tahun' => '1981'
			)
		);
		Book::create( //72
			array(
				'judul' => 'Microprocessors : design and applications',
				'pengarang' => 'Andrew Veronis',
				'dcc_code' => '621.391',
				'penerbit' => 'Reston Publishing',
				'isbn' => '0879794931', //nullable
				'tahun' => '1978'
			)
		);
		Book::create( //73
			array(
				'judul' => 'A guide to COBOL programming ',
				'pengarang' => 'Daniel D. McCracken  Umberto Garbassi',
				'dcc_code' => '005.133',
				'penerbit' => 'John Wiley & Sons, Inc',
				'edisi' => '2',
				'isbn' => '0471582433', //nullable
				'tahun' => '1970'
			)
		);
		Book::create( //74
			array(
				'judul' => 'Data structures using Pascal',
				'pengarang' => 'Aaron M. Tenenbaum  Moshe J. Augenstein',
				'dcc_code' => '005.73',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0131964364', //nullable
				'tahun' => '1981'
			)
		);
		Book::create( //75
			array(
				'judul' => 'Macro Assembler',
				'pengarang' => 'Microsoft',
				'dcc_code' => '005.133',
				'penerbit' => 'Microsoft Press',
				'tahun' => '1981'
			)
		);
		Book::create( //76
			array(
				'judul' => 'Data systems and management : an introduction to systems analysis and design',
				'pengarang' => 'Alton R. Kindred',
				'dcc_code' => '005.12',
				'penerbit' => 'Prentice Hall',
				'edisi' => '2',
				'isbn' => '0131964852', //nullable
				'tahun' => '1973'
			)
		);
		Book::create( //77
			array(
				'judul' => 'Computer data structures',
				'pengarang' => 'John L. Pfaltz',
				'dcc_code' => '005.73',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070497435', //nullable
				'tahun' => '1977'
			)
		);
		Book::create( //78
			array(
				'judul' => 'Programming languages',
				'pengarang' => 'Allen B. Tucker Jr',
				'dcc_code' => '005.13',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070654158', //nullable
				'tahun' => '1977'
			)
		);
		Book::create( //79
			array(
				'judul' => 'Systems programming',
				'pengarang' => 'John J. Donovan',
				'dcc_code' => '005',
				'penerbit' => 'McGraw Hill',
				'tahun' => '1972'
			)
		);
		Book::create( //80
			array(
				'judul' => 'Penggunaan komputer yang efektif dalam bisnis : dengan ancangan manajemen berdasarkan sasaran',
				'pengarang' => 'Kit Grindley  John Humble',
				'dcc_code' => '650.028 5',
				'penerbit' => 'Pustaka Binaman Pressindo',
				'tahun' => '1982'
			)
		);
		Book::create( //81
			array(
				'judul' => '6800 assembly language programming',
				'pengarang' => 'Lance A. Leventhal',
				'dcc_code' => '005.265',
				'penerbit' => 'Osborne & associates',
				'isbn' => '0931988128', //nullable
				'tahun' => '1987'
			)
		);
		Book::create( //82
			array(
				'judul' => 'System design and documentation : an introduction to the HIPO method',
				'pengarang' => 'Harry Katzan',
				'dcc_code' => '003.7',
				'penerbit' => 'Van Nostrand Reinhold',
				'isbn' => '0442242670', //nullable
				'tahun' => '1976'
			)
		);
		Book::create( //83
			array(
				'judul' => 'Structured Cobol : a pragmatic approach',
				'pengarang' => 'Robert T. Grauer  Marshal A. Crawford',
				'dcc_code' => '005.133 [COB]',
				'penerbit' => 'Prentice Hall',
				'tahun' => '1981'
			)
		);
		Book::create( //84
			array(
				'judul' => 'Microcomputer  disk  techniques',
				'pengarang' => 'Paul  Swanson',
				'dcc_code' => '004.563',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070625824', //nullable
				'tahun' => '1982'
			)
		);
		Book::create( //85
			array(
				'judul' => 'RPG : programming',
				'pengarang' => 'Widia S.',
				'dcc_code' => '005.133 [RPG]',
				'penerbit' => 'Modern Computer Course',
				'tahun' => '1982'
			)
		);
		Book::create( //86
			array(
				'judul' => 'Effective data base design',
				'pengarang' => 'William H. Inmon',
				'dcc_code' => '005.740 68',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0132414899', //nullable
				'tahun' => '1981'
			)
		);
		Book::create( //87
			array(
				'judul' => 'Apple logo : introduction to programming through turtle graphics',
				'pengarang' => 'Cynthia J. Solomon',
				'dcc_code' => '621.399',
				'penerbit' => 'Computer System, inc.',
				'tahun' => '1982'
			)
		);
		Book::create( //88
			array(
				'judul' => 'Pemrograman komputer Fortran IV',
				'pengarang' => 'Nyoman Susila',
				'dcc_code' => '005.133',
				'penerbit' => 'Baskara',
				'tahun' => '1983'
			)
		);
		Book::create( //89
			array(
				'judul' => 'Computer progrmming fundamental fortran IV',
				'pengarang' => 'Sushil Dass Gupta',
				'dcc_code' => '005.133 [FOR]',
				'penerbit' => 'Khanna Publishers',
				'tahun' => '1979'
			)
		);
		Book::create( //90
			array(
				'judul' => 'Perencanaan dan pengendalian dengan PERT dan CPM',
				'pengarang' => 'Richard I.Levin, Charles A.Kirkpatrick, penterjemah:Magdalena Adiwardana J.',
				'dcc_code' => '658.403 2',
				'penerbit' => 'Academic Press',
				'tahun' => '1977'
			)
		);
		Book::create( //91
			array(
				'judul' => 'Uraian lengkap metode network planning : jilid III',
				'pengarang' => 'Soetomo Kajatno',
				'dcc_code' => '658.403 2',
				'penerbit' => 'Badan Penerbit Pekerjaan Umum',
				'tahun' => '1974'
			)
		);
		Book::create( //92
			array(
				'judul' => 'Uraian lengkap metode network planning : jilid I',
				'pengarang' => 'Soetomo Kajatno',
				'dcc_code' => '658.403 2',
				'penerbit' => 'Badan Penerbit Pekerjaan Umum',
				'tahun' => '1969'
			)
		);
		Book::create( //93
			array(
				'judul' => 'Uraian lengkap metode network planning : jilid II',
				'pengarang' => 'Soetomo Kajatno',
				'dcc_code' => '658.403 2',
				'penerbit' => 'Badan Penerbit Pekerjaan Umum',
				'tahun' => '1969'
			)
		);
		Book::create( //94
			array(
				'judul' => 'SPSS introductory guide : bacis statistics and operations',
				'pengarang' => 'Marija J. Norusis',
				'dcc_code' => '005.302 1',
				'penerbit' => 'Sine Nomine',
				'tahun' => '-'
			)
		);
		Book::create( //95
			array(
				'judul' => 'Updates for IBM personal computer cobol compiler (version 1.00)',
				'pengarang' => 'IBM',
				'dcc_code' => '005.133 [COB]',
				'penerbit' => 'International Business Machines',
				'tahun' => '1960'
			)
		);
		Book::create( //96
			array(
				'judul' => 'Theory and problems of optics',
				'pengarang' => 'Eugene Hecht',
				'dcc_code' => '535',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070277303', //nullable
				'tahun' => '1975'
			)
		);
		Book::create( //97
			array(
				'judul' => 'The psychology of computer programming ',
				'pengarang' => 'Gerald M. Weinberg',
				'dcc_code' => '005.13',
				'penerbit' => 'Van Nostrand Reinhold',
				'isbn' => '0442292643', //nullable
				'tahun' => '1971'
			)
		);
		Book::create( //98
			array(
				'judul' => 'Business comunication in the personal computer age',
				'pengarang' => 'Bryan Pfaffenberger',
				'dcc_code' => '005.368 2',
				'penerbit' => 'Irwin',
				'isbn' => '0256036535', //nullable
				'tahun' => '1987'
			)
		);
		Book::create( //99
			array(
				'judul' => 'Fortran compiler',
				'pengarang' => 'Microsoft Corporation',
				'dcc_code' => '005.133 [FOR]',
				'penerbit' => 'Microsoft Press',
				'tahun' => '1982'
			)
		);
		Book::create( //100
			array(
				'judul' => '',
				'pengarang' => '',
				'dcc_code' => '',
				'penerbit' => '',
				'edisi' => '',
				'isbn' => '', //nullable
				'tahun' => ''
			)
		);
		//TO BE CONTINUE
	}
} 	