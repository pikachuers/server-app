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
				'pengarang' => "Nesa L'abbe Wu",
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
				'judul' => "Schaum's outline series theory and problems of operations research",
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
				'judul' => "Schaum's outline of theory and  problems of accounting II",
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
				'judul' => 'COBOL-80 : microsoft cobol-80 documentation, Cobol-80 reference manual',
				'pengarang' => 'Microsoft',
				'dcc_code' => '005.133 [COB]',
				'penerbit' => 'Microsoft Press',
				'tahun' => '1980'
			)
		);
		Book::create(
			array(
				'judul' => 'Pelajaran elektronika  : pengolah mikro / komputer mikro',
				'pengarang' => 'Wasito S',
				'dcc_code' => '621.391 6',
				'penerbit' => 'Karya Utama',
				'edisi' => '2',
				'tahun' => '1982'
			)
		);
		Book::create(
			array(
				'judul' => 'How to computerize your small business',
				'pengarang' => 'Jules A. Cohen  Catherine Scott Mckinney',
				'dcc_code' => '658.05',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0134038576',
				'tahun' => '1980'
			)
		);
		Book::create(
			array(
				'judul' => 'Management information systems : conceptual foundations, structure, and development',
				'pengarang' => 'Gordon B. Davis',
				'dcc_code' => '658.403 8',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070158274',
				'tahun' => '1974'
			)
		);
		Book::create(
			array(
				'judul' => 'Accounting principles',
				'pengarang' => 'Philip E. Fess  C. Rollin Niswonger',
				'dcc_code' => '657',
				'penerbit' => 'South-Western Publishing',
				'edisi' => '13',
				'tahun' => '-'
			)
		);
		Book::create(
			array(
				'judul' => 'Accounting and information systems',
				'pengarang' => 'John R. Page  H. Paul Hooper',
				'dcc_code' => '657.028 5',
				'penerbit' => 'Reston Publishing',
				'isbn' => '0835900827',
				'tahun' => '1979'
			)
		);
		Book::create(
			array(
				'judul' => 'Accounting information systems and business organizations',
				'pengarang' => 'Barry E. Cushing  Marshall B. Romney',
				'dcc_code' => '657.028 5',
				'penerbit' => 'Addison-Wesley',
				'edisi' => '4',
				'isbn' => '0201103176',
				'tahun' => '1987'
			)
		);
		Book::create(
			array(
				'judul' => 'Kalkulus: jilid satu',
				'pengarang' => 'Moedomo ... [et al.]',
				'dcc_code' => '515',
				'penerbit' => 'Penerbit Institut Teknologi Bandung',
				'tahun' => '1982'
			)
		);
		Book::create(
			array(
				'judul' => 'SPSS introductory guide : bacis statistics and operations',
				'pengarang' => 'Marija J. Norusis',
				'dcc_code' => '005.302 1',
				'penerbit' => 'Sine Nomine',
				'tahun' => '-'
			)
		);
		Book::create(
			array(
				'judul' => 'Linear programming and economic analysis',
				'pengarang' => 'Robert Dorfman  Paul A. Samuelson  Robert M. Solow',
				'dcc_code' => '519.72',
				'penerbit' => 'McGraw Hill',
				'isbn' => '070176213',
				'tahun' => '1958'
			)
		);
		Book::create( //110
			array(
				'judul' => 'Background math for a computer world',
				'pengarang' => 'Ruth Ashley',
				'dcc_code' => '519',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '0471035068',
				'tahun' => '1973'
			)
		);
		Book::create(
			array(
				'judul' => 'Kewiraan untuk mahasiswa',
				'pengarang' => 'Lemhannas',
				'dcc_code' => '320.12',
				'penerbit' => 'PT. Gramedia Pustaka Utama',
				'tahun' => '1985'
			)
		);
		Book::create(
			array(
				'judul' => 'Budgeting : profit planning and control',
				'pengarang' => 'Glenn A. Welsch',
				'dcc_code' => '658.154',
				'penerbit' => 'Prentice Hall',
				'edisi' => '4',
				'isbn' => '0876921314',
				'tahun' => '1984'
			)
		);
		Book::create(
			array(
				'judul' => 'Pengantar metodologi research sosial',
				'pengarang' => 'Kartini Kartono',
				'dcc_code' => '001.42',
				'penerbit' => 'Alumni',
				'tahun' => '1983'
			)
		);
		Book::create(
			array(
				'judul' => 'Digital circuits and logic design',
				'pengarang' => 'Samuel C. Lee',
				'dcc_code' => '621.395',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0876921497',
				'tahun' => '1980'
			)
		);
		Book::create(
			array(
				'judul' => 'Introduction to digital computer technology',
				'pengarang' => 'Louis Nashelsky',
				'dcc_code' => '621.39',
				'penerbit' => 'John Wiley & Sons, Inc',
				'edisi' => '2',
				'tahun' => '1977'
			)
		);
		Book::create(
			array(
				'judul' => 'Digital logic and computer design',
				'pengarang' => 'M. Morris Mano',
				'dcc_code' => '621.392',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0132143380',
				'tahun' => '1979'
			)
		);
		Book::create(
			array(
				'judul' => 'Accounting information systems and business organizations',
				'pengarang' => 'Barry E. Cushing',
				'dcc_code' => '657.028 5',
				'penerbit' => 'Addison-Wesley',
				'edisi' => '2',
				'isbn' => '02010106X',
				'tahun' => '1978'
			)
		);
		Book::create(
			array(
				'judul' => 'Introduction to operations research and management science : a general systems approach',
				'pengarang' => 'James L. Riggs  Michael S. Inoue',
				'dcc_code' => '658.403 4',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070528705',
				'tahun' => '1975'
			)
		);
		Book::create(
			array(
				'judul' => 'An introductory approach to operations research',
				'pengarang' => 'Robert J. Thierauf',
				'dcc_code' => '658.403 4',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '0471031259',
				'tahun' => '1978'
			)
		);
		Book::create( //120
			array(
				'judul' => 'Introduction to management information systems',
				'pengarang' => 'Robert G. Murdick  Joel E. Ross',
				'dcc_code' => '658.403 8',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0134862333',
				'tahun' => '1977'
			)
		);
		Book::create(
			array(
				'judul' => "Schaum's outline of theory and problems of accounting I",
				'pengarang' => 'James A. Cashin  Joel J. Lerner',
				'dcc_code' => '657',
				'penerbit' => 'McGraw Hill',
				'edisi' => '2',
				'isbn' => '0070102511',
				'tahun' => '1980'
			)
		);
		Book::create(
			array(
				'judul' => 'Theory and problems of digital principles',
				'pengarang' => 'Roger L. Tokheim',
				'dcc_code' => '621.381 5',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070649286',
				'tahun' => '1980'
			)
		);
		Book::create(
			array(
				'judul' => 'Statistics for business',
				'pengarang' => 'Byron L. Newton',
				'dcc_code' => '519.5',
				'penerbit' => 'Science Research Associates',
				'isbn' => '0574184651',
				'tahun' => '1973'
			)
		);
		Book::create(
			array(
				'judul' => "Logic & memory experiments using TTL IC'S",
				'pengarang' => 'David G. Larsen  Peter R. Rony',
				'dcc_code' => '621.395',
				'penerbit' => 'Howard W.Sams & Co',
				'isbn' => '067221542X',
				'tahun' => '1978'
			)
		);
		Book::create(
			array(
				'judul' => 'Business mathematics',
				'pengarang' => 'L. W. T. Stafford',
				'dcc_code' => '510',
				'penerbit' => 'Mackdonald  and Evans',
				'edisi' => '2',
				'isbn' => '0712102825',
				'tahun' => '1969'
			)
		);
		Book::create(
			array(
				'judul' => 'Computing problems for Fortran solution',
				'pengarang' => 'Robert Teague',
				'dcc_code' => '005.133',
				'penerbit' => 'Canfield  Press',
				'isbn' => '063886723',
				'tahun' => '1972'
			)
		);
		Book::create(
			array(
				'judul' => 'TTL Cookbook',
				'pengarang' => 'Don Lancaster',
				'dcc_code' => '621.395',
				'penerbit' => 'Howard W.Sams & Co',
				'edisi' => '1',
				'isbn' => '0672210355',
				'tahun' => '1974'
			)
		);
		Book::create(
			array(
				'judul' => 'Pulse & Switching circuits',
				'pengarang' => 'Harvey F. Swearer',
				'dcc_code' => '621.381 534',
				'penerbit' => 'Foulsham-tab  limited',
				'isbn' => '0704201518',
				'tahun' => '1975'
			)
		);
		Book::create(
			array(
				'judul' => 'Computer languages and their uses',
				'pengarang' => 'Garry Marshall',
				'dcc_code' => '005.13',
				'penerbit' => 'Granada',
				'isbn' => '0246120223',
				'tahun' => '1983'
			)
		);
		Book::create( //130
			array(
				'judul' => 'Introduction to the design and analysis of algorithms',
				'pengarang' => 'S. E. Goodman  S. T. Hedetniemi',
				'dcc_code' => '005.1',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070237530',
				'tahun' => '1977'
			)
		);
		Book::create(
			array(
				'judul' => 'The spectrum programmer',
				'pengarang' => 'S. M. Gee',
				'dcc_code' => '005.265',
				'penerbit' => 'Granada',
				'edisi' => '',
				'isbn' => '0246120258',
				'tahun' => '1983'
			)
		);
		Book::create(
			array(
				'judul' => 'Management',
				'pengarang' => 'James A. F. Stoner',
				'dcc_code' => '658',
				'penerbit' => 'Prentice Hall',
				'edisi' => '2',
				'isbn' => '013549642x',
				'tahun' => '1982'
			)
		);
		Book::create(
			array(
				'judul' => 'Guide to CMOS basics, circuits, &  experiments',
				'pengarang' => 'Howard M. Berlin',
				'dcc_code' => '621.397 32',
				'penerbit' => 'Howard W.Sams & Co',
				'isbn' => '067221654x',
				'tahun' => '1979'
			)
		);
		Book::create(
			array(
				'judul' => '101 Color Computer Programming Tips & Tricks',
				'pengarang' => 'Ron Clark',
				'dcc_code' => '005.3',
				'penerbit' => 'Arco Publishing',
				'isbn' => '0866680071',
				'tahun' => '1981'
			)
		);
		Book::create(
			array(
				'judul' => 'Taming your computer : a guide for business and proffesional people  ',
				'pengarang' => 'Jerome Kanter',
				'dcc_code' => '005',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0138843953',
				'tahun' => '1981'
			)
		);
		Book::create(
			array(
				'judul' => 'Advanced basic : applications and problems',
				'pengarang' => 'James S. Coan',
				'dcc_code' => '005.131',
				'penerbit' => 'Hayden Book Company',
				'isbn' => '0810458551',
				'tahun' => '1977'
			)
		);
		Book::create(
			array(
				'judul' => 'Electronic computer technology',
				'pengarang' => 'Norman R. Scott',
				'dcc_code' => '621.39',
				'penerbit' => 'McGraw Hill',
				'tahun' => '1970'
			)
		);
		Book::create(
			array(
				'judul' => 'Managing the data resource function',
				'pengarang' => 'Richard L. Nolan : Editor',
				'dcc_code' => '658.403 8',
				'penerbit' => 'West Publishing',
				'isbn' => '0829900039',
				'tahun' => '1974'
			)
		);
		Book::create(
			array(
				'judul' => 'Operating system',
				'pengarang' => 'Sudiyanto',
				'dcc_code' => '005.43',
				'penerbit' => 'Yayasan Pembinaan Keluarga UPN  Veteran',
				'tahun' => '1982'
			)
		);
		Book::create( //140
			array(
				'judul' => 'Principles of data processing',
				'pengarang' => 'Robert A. Stern  Nancy B. Stern',
				'dcc_code' => '004',
				'penerbit' => 'John Wiley & Sons, Inc',
				'edisi' => '2',
				'isbn' => '0471016969',
				'tahun' => '1979'
			)
		);
		Book::create(
			array(
				'judul' => 'Digital circuits and microprocessors',
				'pengarang' => 'Herbert Taub',
				'dcc_code' => '621.381 5',
				'penerbit' => 'McGraw Hill',
				'isbn' => '070665958',
				'tahun' => '1982'
			)
		);
		Book::create(
			array(
				'judul' => 'Information Processing',
				'pengarang' => 'Marilyn Bohl',
				'dcc_code' => '005',
				'penerbit' => 'Science Research Associates',
				'edisi' => '3',
				'isbn' => '0574212655',
				'tahun' => '1980'
			)
		);
		Book::create(
			array(
				'judul' => 'Information systems : theory and practice',
				'pengarang' => 'John  G.Burch  Felix R.Straler  Gary  Grudniski',
				'dcc_code' => '658.403 8',
				'penerbit' => 'John Wiley & Sons, Inc',
				'edisi' => '2',
				'tahun' => '1979'
			)
		);
		Book::create(
			array(
				'judul' => 'Introduction to IBM direct access storage devices',
				'pengarang' => 'Marilyn Bohl',
				'dcc_code' => '005.74',
				'penerbit' => 'Science Research Associates',
				'isbn' => '0574211403',
				'tahun' => '1981'
			)
		);
		Book::create(
			array(
				'judul' => 'Fifty basic exercises',
				'pengarang' => 'Jean-Pierre Lamoitier',
				'dcc_code' => '005.3',
				'penerbit' => 'Sybex',
				'isbn' => '0895880563',
				'tahun' => '1981'
			)
		);
		Book::create(
			array(
				'judul' => 'The home computer book',
				'pengarang' => 'Len Buckwalter',
				'dcc_code' => '004',
				'penerbit' => 'A Wallaby Book',
				'isbn' => '0671790293',
				'tahun' => '1978'
			)
		);
		Book::create(
			array(
				'judul' => 'The ZX Spectrum : and How To get Most From it',
				'pengarang' => 'Ian Sinclair',
				'dcc_code' => '005.265',
				'penerbit' => 'Granada',
				'isbn' => '0246120185',
				'tahun' => '1982'
			)
		);
		Book::create(
			array(
				'judul' => '8085A CookBook',
				'pengarang' => 'Christopher A Titus  David G. Larssen  Jonathan A.Titus',
				'dcc_code' => '621.391',
				'penerbit' => 'Howard W.Sams & Co',
				'isbn' => '0672216973',
				'tahun' => '1980'
			)
		);
		Book::create(
			array(
				'judul' => 'An introduction to linear programming and game theory',
				'pengarang' => 'Paul R. Thie',
				'dcc_code' => '519.72',
				'penerbit' => 'John Wiley & Sons, Inc',
				'tahun' => '1979'
			)
		);
		Book::create( //150
			array(
				'judul' => 'Programming Microcomputers With PASCAL',
				'pengarang' => 'M.D.Beer',
				'dcc_code' => '005.133',
				'penerbit' => 'Granada',
				'isbn' => '0046116196',
				'tahun' => '1982'
			)
		);
		Book::create(
			array(
				'judul' => 'Guide to fundamentals of application and system training',
				'pengarang' => 'IBM',
				'dcc_code' => '005',
				'penerbit' => 'International Business Machines',
				'tahun' => '1981'
			)
		);
		Book::create(
			array(
				'judul' => 'Apple graphics games',
				'pengarang' => 'Paul Coletta',
				'dcc_code' => '794.8',
				'penerbit' => 'Reston Publishing',
				'isbn' => '0835903257',
				'tahun' => '1983'
			)
		);
		Book::create(
			array(
				'judul' => 'A fortran IV primer',
				'pengarang' => 'Elliott I. Organick',
				'dcc_code' => '005.133',
				'penerbit' => 'Addison-Wesley',
				'tahun' => '1966'
			)
		);
		Book::create(
			array(
				'judul' => 'Management P.',
				'pengarang' => 'Eddy Santoso',
				'dcc_code' => '658',
				'penerbit' => 'Akademi Teknik Komputer',
				'tahun' => '1984'
			)
		);
		Book::create(
			array(
				'judul' => 'Structured cobol for data processing',
				'pengarang' => 'Norman R. Lyons',
				'dcc_code' => '005.133',
				'penerbit' => 'Glencoe/McGraw-Hill',
				'isbn' => '0024707708',
				'tahun' => '1980'
			)
		);
		Book::create(
			array(
				'judul' => "Business system buyer's guide",
				'pengarang' => 'Adam Osborne  Steven Cook',
				'dcc_code' => '004',
				'penerbit' => 'Osbourne',
				'isbn' => '0931988470',
				'tahun' => '1981'
			)
		);
		Book::create(
			array(
				'judul' => 'Computer organization and programming',
				'pengarang' => 'C. William Gear',
				'dcc_code' => '004',
				'penerbit' => 'McGraw Hill',
				'edisi' => '3',
				'isbn' => '0070230420',
				'tahun' => '1980'
			)
		);
		Book::create(
			array(
				'judul' => 'Prinsip dan teknik manajemen',
				'pengarang' => 'Santanoe Kertonegoro',
				'dcc_code' => '658',
				'penerbit' => 'Sine Nomine',
				'tahun' => '1982'
			)
		);
		Book::create(
			array(
				'judul' => 'Computing with : fortran IV : a practical course',
				'pengarang' => 'Donald M. Monro',
				'dcc_code' => '005.131',
				'penerbit' => 'Edward  Arnold',
				'isbn' => '0713125462',
				'tahun' => '1977'
			)
		);
		Book::create( //160
			array(
				'judul' => 'Business system analysis and design',
				'pengarang' => 'Gary B. Shelly  Thomas J. Cashman',
				'dcc_code' => '005.12',
				'penerbit' => 'Anaheim Publishing Company',
				'isbn' => '0882360434',
				'tahun' => '1975'
			)
		);
		Book::create(
			array(
				'judul' => 'Linear Programming : methods and applications',
				'pengarang' => 'Saul I. Gass',
				'dcc_code' => '519.72',
				'penerbit' => 'McGraw Hill',
				'edisi' => '3',
				'tahun' => '1958'
			)
		);
		Book::create(
			array(
				'judul' => 'Comprehensive computer studies',
				'pengarang' => 'Peter Bishop',
				'dcc_code' => '005',
				'penerbit' => 'Edward  Arnold',
				'isbn' => '071310371X',
				'tahun' => '1981'
			)
		);
		Book::create(
			array(
				'judul' => 'COBOL : a structured approach',
				'pengarang' => 'Thomas C. Richards  Robert S. Cheney',
				'dcc_code' => '005.133 [COB]',
				'penerbit' => 'Charles  E.Merrill  publishing',
				'isbn' => '067508041X',
				'tahun' => '1981'
			)
		);
		Book::create(
			array(
				'judul' => 'Methodical programming in Cobol',
				'pengarang' => 'Ray Welland',
				'dcc_code' => '005.133 [COB]',
				'penerbit' => 'Pitman Publishing',
				'edisi' => '1',
				'isbn' => '0273018205',
				'tahun' => '1983'
			)
		);
		Book::create(
			array(
				'judul' => 'Computer programming : RPG II',
				'pengarang' => 'Gary B. Shelly  Thomas J. Cashman',
				'dcc_code' => '005.133 [PRO]',
				'penerbit' => 'Anaheim Publishing Company',
				'isbn' => '0882362267',
				'tahun' => '1981'
			)
		);
		Book::create(
			array(
				'judul' => 'Fundamental of operating system',
				'pengarang' => 'Andrew Martin Lister',
				'dcc_code' => '005.43',
				'penerbit' => 'Macmillan',
				'edisi' => '2',
				'isbn' => '0333272870',
				'tahun' => '1990'
			)
		);
		Book::create(
			array(
				'judul' => 'Fortran 77 : principles of programming',
				'pengarang' => 'Jerrold L. Wagener',
				'dcc_code' => '005.133 [FOR]',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '0471044741',
				'tahun' => '1980'
			)
		);
		Book::create(
			array(
				'judul' => '370/360 Assembler language programming',
				'pengarang' => 'Nancy Stern  Alden Sager  Robert A. Stern',
				'dcc_code' => '005.133 [PRO]',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '0471034290',
				'tahun' => '1979'
			)
		);
		Book::create(
			array(
				'judul' => 'Readings in management information systems',
				'pengarang' => 'Edited : Gordon B. Davis  Gordon C. Everest',
				'dcc_code' => '658.403 8',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070158355',
				'tahun' => '1976'
			)
		);
		Book::create( //170
			array(
				'judul' => 'Fortran IV programming',
				'pengarang' => 'Th. Widia S.',
				'dcc_code' => '005.133 [FOR]',
				'penerbit' => 'STMIK Bina Nusantara',
				'tahun' => '1985'
			)
		);
		Book::create(
			array(
				'judul' => 'Computer applications of numerical methods',
				'pengarang' => 'Shan S. Kuo',
				'dcc_code' => '003.3',
				'penerbit' => 'Addison-Wesley',
				'tahun' => '1972'
			)
		);
		Book::create(
			array(
				'judul' => 'IBM system/34 source entry utility reference manual',
				'pengarang' => 'International Business Machines',
				'dcc_code' => '005.245 [IBM]',
				'penerbit' => 'IBM Corporation Pub.',
				'tahun' => '1982'
			)
		);
		Book::create(
			array(
				'judul' => '6502 applications book',
				'pengarang' => 'Rodney Zaks',
				'dcc_code' => '005.36',
				'penerbit' => 'Sybex',
				'isbn' => '0895880156',
				'tahun' => '1984'
			)
		);
		Book::create(
			array(
				'judul' => 'Element of numerical analysis',
				'pengarang' => 'Peter Henrici',
				'dcc_code' => '519.4',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '0471372382',
				'tahun' => '1964'
			)
		);
		Book::create(
			array(
				'judul' => 'Linear programming : an emphasis on decision making',
				'pengarang' => 'Ann J. Hughes  Dennis E. Grawiog',
				'dcc_code' => '519.72',
				'penerbit' => 'Addison-Wesley',
				'tahun' => '1973'
			)
		);
		Book::create(
			array(
				'judul' => 'Database : structured techniques for design, performance, and management with case studies',
				'pengarang' => 'S. Atre',
				'dcc_code' => '005.740 68',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '0471052671',
				'tahun' => '1980'
			)
		);
		Book::create(
			array(
				'judul' => 'Data communications and teleprocessing system',
				'pengarang' => 'Trevor Housley',
				'dcc_code' => 'Stephen F. Love.',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0131973681',
				'tahun' => '1979'
			)
		);
		Book::create(
			array(
				'judul' => 'Systems Analysis',
				'pengarang' => 'Andrew Parkin',
				'dcc_code' => '003',
				'penerbit' => 'Edward  Arnold',
				'isbn' => '0713128003',
				'tahun' => '1980'
			)
		);
		Book::create(
			array(
				'judul' => 'Inventory control',
				'pengarang' => 'Stephen F. Love.',
				'dcc_code' => '658.787',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070387826',
				'tahun' => '1979'
			)
		);
		Book::create( //180
			array(
				'judul' => 'Accounting and information systems',
				'pengarang' => 'Joseph W. Wilkinson',
				'dcc_code' => '657.028 5',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '0471049867',
				'tahun' => '1982'
			)
		);
		Book::create(
			array(
				'judul' => 'The art of computer programming : fundamental algorithms',
				'pengarang' => 'Donald E. Knuth',
				'dcc_code' => '005.1',
				'penerbit' => 'Addison-Wesley',
				'edisi' => '2',
				'isbn' => '0201038099',
				'tahun' => '1973'
			)
		);
		Book::create(
			array(
				'judul' => 'A casebook for management information systems',
				'pengarang' => 'Henry  C. Lucas, Jr.  Cyrus  F. Gibson',
				'dcc_code' => '658.403 8',
				'penerbit' => 'McGraw Hill',
				'edisi' => '2',
				'isbn' => '007038939X',
				'tahun' => '1981'
			)
		);
		Book::create(
			array(
				'judul' => 'Understanding Cobol ',
				'pengarang' => 'Richard G. Peddicord',
				'dcc_code' => '005.133 [COB]',
				'penerbit' => 'Alfred  publishing',
				'tahun' => '1981'
			)
		);
		Book::create(
			array(
				'judul' => 'Modern data processing',
				'pengarang' => 'Robert R. Arnold  Harold C. Hill  Aylmer V. Nichols',
				'dcc_code' => '004',
				'penerbit' => 'John Wiley & Sons, Inc',
				'edisi' => '3',
				'tahun' => '1978'
			)
		);
		Book::create(
			array(
				'judul' => 'Fortran : programs for scientists and engineers',
				'pengarang' => 'Alan R. Miller',
				'dcc_code' => '005.133 [FOR]',
				'penerbit' => 'Sybex',
				'isbn' => '0895880822',
				'tahun' => '1982'
			)
		);
		Book::create(
			array(
				'judul' => 'Cobol programming : jilid II',
				'pengarang' => 'Th. Widia S.  F.X. Soehartono',
				'dcc_code' => '005.133 [COB]',
				'penerbit' => 'STMIK Bina Nusantara',
				'tahun' => '1984'
			)
		);
		Book::create(
			array(
				'judul' => 'Cobol programming : jilid I',
				'pengarang' => 'Th. Widia S.',
				'dcc_code' => '005.133 [COB]',
				'penerbit' => 'STMIK Bina Nusantara',
				'tahun' => '1984'
			)
		);
		Book::create(
			array(
				'judul' => 'Understanding fortran',
				'pengarang' => 'Herbert R. Ludwig',
				'dcc_code' => '005.133 [FOR]',
				'penerbit' => 'Alfred  publishing',
				'isbn' => '0882841483',
				'tahun' => '1981'
			)
		);
		Book::create(
			array(
				'judul' => 'Kerangka dasar sistem informasi manajemen : bagian II struktur dan pengembangannya',
				'pengarang' => 'Gordon B. Davis  Penterjemah  Bob Widyahartono',
				'dcc_code' => '658.403 801 1',
				'penerbit' => 'Pustaka Binaman Pressindo',
				'edisi' => '',
				'isbn' => '',
				'tahun' => '1984'
			)
		);
		Book::create( //190
			array(
				'judul' => 'Pengantar Fortran',
				'pengarang' => 'Roger Hutty',
				'dcc_code' => '005.133 [FOR]',
				'penerbit' => 'Erlangga',
				'tahun' => '1984'
			)
		);
		Book::create(
			array(
				'judul' => 'The IBM personal computer',
				'pengarang' => 'Robert J. Traister',
				'dcc_code' => '005.245',
				'penerbit' => 'TAB Books',
				'isbn' => '0830626964',
				'tahun' => '1983'
			)
		);
		Book::create(
			array(
				'judul' => 'Introductory finite mathematics with computing',
				'pengarang' => 'William S. Dorn  Daniel D. McCracken',
				'dcc_code' => '510',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '0471219215',
				'tahun' => '1976'
			)
		);
		Book::create(
			array(
				'judul' => 'Theory and problems of linear algebra',
				'pengarang' => 'Seymour Lipschutz',
				'dcc_code' => '512.5',
				'penerbit' => 'McGraw Hill',
				'isbn' => '007990123',
				'tahun' => '1968'
			)
		);
		Book::create(
			array(
				'judul' => 'The world processing handbook',
				'pengarang' => 'Russell Allen Stultz',
				'dcc_code' => '652.5',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0139634541',
				'tahun' => '1982'
			)
		);
		Book::create(
			array(
				'judul' => 'Troubleshooting and repairing personal computers',
				'pengarang' => 'Art Margolis',
				'dcc_code' => '621.398',
				'penerbit' => 'TAB Books',
				'edisi' => '1',
				'isbn' => '0830601392',
				'tahun' => '1983'
			)
		);
		Book::create(
			array(
				'judul' => 'Aljabar linier',
				'pengarang' => 'R. Darodjat  M. Margha',
				'dcc_code' => '512.5',
				'penerbit' => 'STMIK Bina Nusantara',
				'tahun' => '1984'
			)
		);
		Book::create(
			array(
				'judul' => 'Design of digital computers : an introduction',
				'pengarang' => 'Hans W. Gschwind',
				'dcc_code' => '621.392',
				'penerbit' => 'Springer-Verlag',
				'tahun' => '1967'
			)
		);
		Book::create(
			array(
				'judul' => 'Fortran 77 : a structured, disciplined style based on 1977 American National standard fortran and compatible with watfor, watfivm watfiv-s and m77 fortran compilers',
				'pengarang' => 'Gordon B. Davis  Thomas R. Hoffmann',
				'dcc_code' => '005.133',
				'penerbit' => 'McGraw Hill',
				'edisi' => '2',
				'isbn' => '0830601392',
				'tahun' => '1983'
			)
		);
		Book::create(
			array(
				'judul' => "6502 user's manual",
				'pengarang' => 'Joseph J. Carr',
				'dcc_code' => '004',
				'penerbit' => 'Reston Publishing',
				'isbn' => '0835970027',
				'tahun' => '1984'
			)
		);
		Book::create( //200
			array(
				'judul' => 'Behavior in organizations',
				'pengarang' => 'Lyman W. Porter  Edward E. Lawler III  J. Richard Hackman',
				'dcc_code' => '658',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070505276',
				'tahun' => '1975'
			)
		);
		Book::create( 
			array(
				'judul' => 'Information systems design',
				'pengarang' => 'Cyril H. P. Brookes  Phillip J. Grouse  D. Ross Jeffery [et.al]',
				'dcc_code' => '004.21',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0724806415',
				'tahun' => '1982'
			)
		);
		Book::create( 
			array(
				'judul' => 'Golden delicious games for the APPLE Computer',
				'pengarang' => 'Howard Franklin  Joanne Koltnow  Leroy Finkel',
				'dcc_code' => '005.265',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '0471090832',
				'tahun' => '1982'
			)
		);
		Book::create( 
			array(
				'judul' => 'The art of computer programming. volume 3 sorting and searching',
				'pengarang' => 'Donald E. Knuth',
				'dcc_code' => '005.1',
				'penerbit' => 'Addison-Wesley',
				'isbn' => '020103803X',
				'tahun' => '1973'
			)
		);
		Book::create( 
			array(
				'judul' => 'Perilaku organisasi : konsep dasar dan aplikasinya',
				'pengarang' => 'Miftah Thoha',
				'dcc_code' => '658',
				'penerbit' => 'CV . Rajawali',
				'isbn' => '9794210153',
				'tahun' => '1983'
			)
		);
		Book::create( 
			array(
				'judul' => 'Pascal for Fortran programmers',
				'pengarang' => 'Ronald H. Perrott  Donald C. S. Allison',
				'dcc_code' => '005.133',
				'penerbit' => 'Computer Scince Press',
				'isbn' => '0914894099',
				'tahun' => '1984'
			)
		);
		Book::create( 
			array(
				'judul' => 'A guide to PL/I and structured programming',
				'pengarang' => 'Seymour V. Pollack  Theodor D. Sterling',
				'dcc_code' => '005.133 [PL]',
				'penerbit' => 'Holt, Rinehart  and  Winston, inc',
				'edisi' => '3',
				'isbn' => '003558212',
				'tahun' => '1980'
			)
		);
		Book::create( 
			array(
				'judul' => 'Principles of compiler design',
				'pengarang' => 'Alfred V. Aho  Jeffrey D. Ullman',
				'dcc_code' => '005.453',
				'penerbit' => 'Addison-Wesley',
				'isbn' => '0201100738',
				'tahun' => '1977'
			)
		);
		Book::create( 
			array(
				'judul' => 'Organizations : theory and behavior',
				'pengarang' => 'Herbert G. Hicks  C. Ray Gullett',
				'dcc_code' => '658.001',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070287309',
				'tahun' => '1975'
			)
		);
		Book::create( 
			array(
				'judul' => 'Numerical Analysis : with the TI-99/4A, Commodore 64, Apple II Plus/IIe, TRS-80 model I/III',
				'pengarang' => 'H. R Meck',
				'dcc_code' => '519.402 85',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0136266312',
				'tahun' => '1984'
			)
		);
		Book::create( //210
			array(
				'judul' => 'Computers in action : how computers work',
				'pengarang' => 'Donald D. Spencer',
				'dcc_code' => '005',
				'penerbit' => 'Hayden Book Company',
				'edisi' => '2',
				'isbn' => '0810457571',
				'tahun' => '1974'
			)
		);
		Book::create( 
			array(
				'judul' => 'Management and organization',
				'pengarang' => 'Louis A. Allen',
				'dcc_code' => '658',
				'penerbit' => 'McGraw Hill',
				'isbn' => '007Y850127',
				'tahun' => '1958'
			)
		);
		Book::create( 
			array(
				'judul' => 'Problem solving in Apple Pascal',
				'pengarang' => 'Lowell A. Carmony ... [et al.]',
				'dcc_code' => '005.265',
				'penerbit' => 'Computer Science Press',
				'isbn' => '0881750069',
				'tahun' => '1984'
			)
		);
		Book::create( 
			array(
				'judul' => 'Writing with a word processor : communication in the computer age',
				'pengarang' => 'Eric D. Brown',
				'dcc_code' => '652',
				'penerbit' => 'Reston Publishing',
				'isbn' => '0835988570',
				'tahun' => '1984'
			)
		);
		Book::create( 
			array(
				'judul' => 'Microprocessor system design concepts',
				'pengarang' => 'Nikitas A. Alexandridis',
				'dcc_code' => '621.392',
				'penerbit' => 'Computer Science Press',
				'isbn' => '0914894668',
				'tahun' => '1984'
			)
		);
		Book::create( 
			array(
				'judul' => 'Accounting information systems : theory and practice',
				'pengarang' => 'Frederick H. Wu',
				'dcc_code' => '657.028 5',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070721211',
				'tahun' => '1983'
			)
		);
		Book::create( 
			array(
				'judul' => 'How to prepare for the graduate management admission test',
				'pengarang' => 'Michael Randall  Morris Bramson  Morton Selub',
				'dcc_code' => '658.007 6',
				'penerbit' => 'Harcourt  Brace  Jovanovich',
				'isbn' => '0156000202',
				'tahun' => '1981'
			)
		);
		Book::create( 
			array(
				'judul' => 'Information systems concepts for management',
				'pengarang' => 'Henry C. Lucas, Jr.',
				'dcc_code' => '658.403 88',
				'penerbit' => 'McGraw Hill',
				'edisi' => '2',
				'isbn' => '0070389241',
				'tahun' => '1982'
			)
		);
		Book::create( 
			array(
				'judul' => 'Statistical Programs in Basic',
				'pengarang' => 'Ronald D. Schwartz  David T. Basso',
				'dcc_code' => '005.302 1',
				'penerbit' => 'Reston Publishing',
				'isbn' => '0835971066',
				'tahun' => '1985'
			)
		);
		Book::create( 
			array(
				'judul' => 'Designing microcomputer systems',
				'pengarang' => 'Udo W. Pooch  Rahul Chattergy',
				'dcc_code' => '621.392',
				'penerbit' => 'Hayden Book Company',
				'isbn' => '0810456796',
				'tahun' => '1979'
			)
		);
		Book::create( //220
			array(
				'judul' => 'IBM PC COBOL',
				'pengarang' => 'William J. Atkinson Jr.  Paul A. De Sanctis',
				'dcc_code' => '005.133',
				'penerbit' => 'Reston Publishing',
				'isbn' => '0835930513',
				'tahun' => '1985'
			)
		);
		Book::create( 
			array(
				'judul' => 'Managing  individual and group behaviuor in organizations',
				'pengarang' => 'Daniel C. Feldman  Hugh J.Arnold',
				'dcc_code' => '658.3',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070203865',
				'tahun' => '1983'
			)
		);
		Book::create( 
			array(
				'judul' => 'Overhead Express : User Guide',
				'pengarang' => 'Business & Professional Software',
				'dcc_code' => '005.133Leo Brodie',
				'penerbit' => 'Business & Professional Software',
				'tahun' => '1984'
			)
		);
		Book::create( 
			array(
				'judul' => 'Disk operating system version 3.0',
				'pengarang' => 'IBM',
				'dcc_code' => '005.43',
				'penerbit' => 'International Business Machines',
				'edisi' => '1',
				'tahun' => '1984'
			)
		);
		Book::create( 
			array(
				'judul' => 'Thinking forth : a language and philosophy for solving problems',
				'pengarang' => 'Leo Brodie',
				'dcc_code' => '005.133',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0139175687',
				'tahun' => '1984'
			)
		);
		Book::create( 
			array(
				'judul' => 'Basic computer programs in science and engineering',
				'pengarang' => 'Jules H. Gilder',
				'dcc_code' => '620.028 5',
				'penerbit' => 'Hayden Book Company',
				'isbn' => '0810407612',
				'tahun' => '1980'
			)
		);
		Book::create( 
			array(
				'judul' => 'System analysis and project management',
				'pengarang' => 'David I. Cleland  William R. King',
				'dcc_code' => '658.403 2',
				'penerbit' => 'McGraw Hill',
				'edisi' => '3',
				'isbn' => '0070113114',
				'tahun' => '1983'
			)
		);
		Book::create( 
			array(
				'judul' => 'Systems analysis and design : a structured approach',
				'pengarang' => 'William S. Davis',
				'dcc_code' => '004.21',
				'penerbit' => 'Addison-Wesley',
				'isbn' => '0201102714',
				'tahun' => '1983'
			)
		);
		Book::create( 
			array(
				'judul' => 'Office systems',
				'pengarang' => 'Samuel Jay Kalow  Ercole Rosa',
				'dcc_code' => '651.8',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0136331491',
				'tahun' => '1984'
			)
		);
		Book::create( 
			array(
				'judul' => 'Language arts computer book : how to guide for teachers',
				'pengarang' => 'Wayne Dickson  Michael W. Raymond',
				'dcc_code' => '428.402 85',
				'penerbit' => 'Reston Publishing',
				'isbn' => '0835939413',
				'tahun' => '1984'
			)
		);
		Book::create( //230
			array(
				'judul' => 'Inside the IBM PC : access to advanced features and programming',
				'pengarang' => 'Peter Norton',
				'dcc_code' => '005.265',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0893035564',
				'tahun' => '1983'
			)
		);
		Book::create( 
			array(
				'judul' => 'Theory and problems of programming with structured cobol',
				'pengarang' => 'Lawrence R. Newcomer',
				'dcc_code' => '005.133',
				'penerbit' => 'McGraw Hill',
				'isbn' => '007037998X',
				'tahun' => '1984'
			)
		);
		Book::create( 
			array(
				'judul' => 'Managing behavior in organization : Text, cases, readings',
				'pengarang' => 'Leonard A. Schlesinger  Robert G. Eccles  John J. Gabarro',
				'dcc_code' => '658.001',
				'penerbit' => 'McGraw Hill',
				'isbn' => '0070553327',
				'tahun' => '1983'
			)
		);
		Book::create( 
			array(
				'judul' => 'PC graphics charts, graphs, games and art on the IBM PC',
				'pengarang' => 'Dick Conklin',
				'dcc_code' => '006.676 5',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '0471892076',
				'tahun' => '1983'
			)
		);
		Book::create( 
			array(
				'judul' => 'Accounting the basis for business decisions',
				'pengarang' => 'Walter B. Meigs  Robert F. Meigs',
				'dcc_code' => '657',
				'penerbit' => 'McGraw Hill',
				'edisi' => '9',
				'isbn' => '0070422532',
				'tahun' => '1990'
			)
		);
		Book::create( 
			array(
				'judul' => 'Introduction to computers',
				'pengarang' => 'Gordon B Davis',
				'dcc_code' => '004',
				'penerbit' => 'McGraw Hill',
				'edisi' => '3',
				'isbn' => '0070662460',
				'tahun' => '1965'
			)
		);
		Book::create( 
			array(
				'judul' => 'Programming language : design and implementation',
				'pengarang' => 'Terrence W. Pratt',
				'dcc_code' => '005.133',
				'penerbit' => 'Prentice Hall',
				'edisi' => '2',
				'isbn' => '0876923945',
				'tahun' => '1985'
			)
		);
		Book::create( 
			array(
				'judul' => 'Distributed processing and data communication',
				'pengarang' => 'Daniel R. McGlynn',
				'dcc_code' => '004.6',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '0471018864',
				'tahun' => '1978'
			)
		);
		Book::create( 
			array(
				'judul' => 'File techniques for data base organization in COBOL',
				'pengarang' => 'LeRoy F. Johnson  Rodney H. Cooper',
				'dcc_code' => '005.133',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0133140393',
				'tahun' => '1981'
			)
		);
		Book::create( 
			array(
				'judul' => 'Spreadsheet software from VisiCalc to 1-2-3',
				'pengarang' => 'LeRoy F. Johnson  Rodney H. Cooper',
				'dcc_code' => '005.3',
				'penerbit' => 'Que Corporation',
				'isbn' => '088022035x',
				'tahun' => '1983'
			)
		);
		Book::create( //240
			array(
				'judul' => 'RPG II and RPG III with business applications',
				'pengarang' => 'Stanley E. Myers',
				'dcc_code' => '005.133 [PRO]',
				'penerbit' => 'Reston Publishing',
				'isbn' => '0835967530',
				'tahun' => '1982'
			)
		);
		Book::create( 
			array(
				'judul' => 'Computers today',
				'pengarang' => 'Donald H. Sanders',
				'dcc_code' => '004',
				'penerbit' => 'McGraw Hill',
				'edisi' => '2',
				'isbn' => '0070547017',
				'tahun' => '1985'
			)
		);
		Book::create( 
			array(
				'judul' => 'Advanced programming : a practical course',
				'pengarang' => 'D.W. Barron  J.M. Bishop',
				'dcc_code' => '621.39',
				'penerbit' => 'John Wiley & Sons, Inc',
				'isbn' => '0471903191',
				'tahun' => '1984'
			)
		);
		Book::create( 
			array(
				'judul' => 'Applied statistics for business and economics',
				'pengarang' => 'Henrick J. Malik  Kenneth Mullen',
				'dcc_code' => '519.5',
				'penerbit' => 'Addison-Wesley',
				'isbn' => '0201044102',
				'tahun' => '1975'
			)
		);
		Book::create( 
			array(
				'judul' => 'Microsoft Cobol : Reference manual',
				'pengarang' => 'Microsoft',
				'dcc_code' => '005.133 [COB]',
				'penerbit' => 'Sine Nomine',
				'tahun' => '1958'
			)
		);
		Book::create( 
			array(
				'judul' => 'The C primer',
				'pengarang' => 'Les Hancock  Morris Krieger',
				'dcc_code' => '005.133 [CLA]',
				'penerbit' => 'McGraw Hill',
				'edisi' => '2',
				'isbn' => '007025995X',
				'tahun' => '1986'
			)
		);
		Book::create( 
			array(
				'judul' => 'Problem solving with the programmable calculator : puzzle, games & simulation with math & science application',
				'pengarang' => 'David L. Dunlop  Thomas F. Sigmund',
				'dcc_code' => '510.285',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0574213201',
				'tahun' => '1983'
			)
		);
		Book::create( 
			array(
				'judul' => 'Police-community relations',
				'pengarang' => 'Edited by : Paul M. Whisenand   James L. Cline  George T. Felkenes',
				'dcc_code' => '306.28',
				'penerbit' => 'Goodyear Publishing Company',
				'isbn' => '0876207042',
				'tahun' => '1974'
			)
		);
		Book::create( 
			array(
				'judul' => 'Database processing : fundamentals, design, implementation',
				'pengarang' => 'David M. Kroenke',
				'dcc_code' => '005.74',
				'penerbit' => 'Science Research Associates',
				'edisi' => '2',
				'isbn' => '0137213409',
				'tahun' => '1983'
			)
		);
		Book::create( 
			array(
				'judul' => 'Foundations of financial management',
				'pengarang' => 'Stanley B. Block  Geoffrey A. Hirt',
				'dcc_code' => '658.15',
				'penerbit' => 'Irwin',
				'edisi' => '4',
				'isbn' => '0256036225',
				'tahun' => '1997'
			)
		);
		Book::create( //250
			array(
				'judul' => 'Introduction to the computer : an integrative approach',
				'pengarang' => 'Jeffrey Frates  William Moldrup',
				'dcc_code' => '004',
				'penerbit' => 'Prentice Hall',
				'isbn' => '0134803019',
				'tahun' => '1980'
			)
		);
	}
} 	