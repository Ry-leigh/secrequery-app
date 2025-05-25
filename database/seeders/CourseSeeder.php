<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courseGroups = [
            'General' => [
                "Physical Education 1",
                "Physical Education 2",
                "Physical Education 3",
                "Physical Education 4",
                "Christian Teaching 1",
                "Christian Teaching 2",
                "Christian Teaching 3",
                "Christian Teaching 4",
                "Christian Teaching 5",
                "Christian Teaching 6",
                "Christian Teaching 7",
                "Christian Teaching 8",
                "National Training Program 1",
                "National Training Program 2",
                "Reading in Philippine History",
                "Purposive Communication",
                "Understanding the Self",
                "Philippine Literature",
                "Life and Works of Rizal",
                "Science, Technology and Society",
                "Mathematics in the Modern World",
                "Art Application",
                "Contemporary World"
            ],
            'Broadcasting' => [
                "Integrated Thesis and Special Project",
                "Consultation Integrated Thesis",
                "Statistical Analysis",
                "Introduction to Communication and Media",
                "Production of Broadcasting, Interactive and Emerging Media",
                "Internet Technology",
                "Media Laws",
                "Production Design for Television, Interactive and Emerging Media",
                "News Writing and Production",
                "Broadcasting Institution MNGT",
                "Non-Linear Post Production",
                "Producing Pre-Recorded Content for Broadcasting, Interactive and Emerging Media",
                "Writing Non-Dramatic Materials",
                "Introduction to Broadcasting",
                "Communication and Media Theory",
                "Kontekstwalisadong Komunikasyon sa Filipino",
                "Analysis of Broadcasting",
                "Political Economy of Broadcasting",
                "Sound Design for Broadcasting",
                "Marketing and Promotion in Broadcasting",
                "Philippine Pop Culture",
                "Writing Dramatic Materials",
                "Programming for Broadcasting",
                "Studies of Audiences/Users of Broadcasting",
                "Research in Broadcasting",
                "Producing Instructional Programs",
                "Producing Live for Broadcasting",
                "Producing Documentaries for Broadcasting",
                "Environmental Science",
                "Producing Public Affairs and Public Interest Programs",
                "World Literature",
                "Introduksyon sa Pananaliksik",
                "Ethics"
            ],
            'SocialWork' => [
                "Knowledge and Philosophical Foundation of the Social Work Profession",
                "Introduksyon sa Pagsasalin",
                "Social Change and Development Perspective",
                "Social Deviation and Social Work",
                "Social Environment and Social Work",
                "Social Welfare Project/Program Development and Management",
                "Social Work Research 1",
                "Social Work Practice with Groups",
                "Social Welfare Agency Management",
                "Field Instruction 1",
                "Fields of Social Work",
                "Filipino Personality and Social Work",
                "Philippine Social Realities and Social Welfare",
                "Social Work Counseling",
                "Social Work Practice with Individuals and Families",
                "Social Welfare Policies, Programs and Services",
                "Social Work Communication and Documentation",
                "Social Work Statistics",
                "Seminar on Current Trends in Social Work Practice",
                "Social Work Practice with Communities",
                "Social Work Research 2",
                "Social Work Community Education and Training",
                "Kontekstwalisadong Komunikasyon sa Filipino",
                "World Literature",
                "Introduksyon sa Pananaliksik",
                "Ethics",
                "Gender and Society"
            ],
            'Accounting' => [
                "Managerial Economics",
                "Financial Accounting and Reporting",
                "Business Law and Regulation",
                "Intermediate Accounting Part 1",
                "Intermediate Accounting Part 2",
                "Intermediate Accounting Part 3",
                "Income Taxation",
                "Cost Accounting and Control",
                "Entrepreneurial Mind",
                "IT Application Tool in Business",
                "Management Science",
                "Financial Management",
                "Economic Development",
                "Auditing and Assurance Principles",
                "Regulatory Framework and Legal Issues in Business",
                "Statistical Analysis with Software Application",
                "Accountancy/Accounting Information System Research",
                "Partnership and Corporation",
                "Law on Obligation and Contracts",
                "Conceptual Frameworks and Accounting Standards",
                "Governance, Business Ethics, Risk Management and Internal Control",
                "Strategic Cost Management",
                "Financial Markets",
                "Transfer and Business Taxation",
                "Accounting Information System",
                "Strategic Business Analysis",
                "Accounting Research Methods",
                "Operations Management and TQM",
                "Strategic Management",
                "International Business and Trade",
                "Human Behavior in Organization",
                "Principles and Methods of Teaching Accounting",
                "Auditing and Assurance Specialized Industries",
                "Competency Enhancement Course",
                "Accounting for Government and Non-Profit",
                "Strategic Tax Management",
                "Auditing and Assurance Concept and Application",
                "Auditing in a CIS Environment",
                "Operations Auditing",
                "Accounting for Business Combinations",
                "Accounting for Special Transactions",
                "Media Ethics",
                "Pagtuturo at Pagtataya"
            ],
            'AccountingIS' => [
                "Information System Analysis and Design",
                "Project Management",
                "Managing Information and Technology",
                "Business Analytics",
                "Information System Operations and Maintenance",
                "Information Security and Management",
                "Data Warehousing and Management",
                "Enterprise Resource Planning and Management",
                "Management Information System"
            ],
            'IS' => [
                "Business and Technical Writing",
                "Applications Development and Emerging Technologies 1",
                "Applications Development and Emerging Technologies 2",
                "Statistical Analysis in Information System",
                "IS Project Management",
                "IS Project Management 2",
                "Business Process Management",
                "IS Strategy Management and Acquisition",
                "Enterprise Architecture",
                "Customer Relationship Management",
                "Capstone Project 1",
                "Capstone Project 2",
                "Quantitative Methods",
                "Methods of Research in Computing",
                "Evaluation of Business",
                "Knowledge Audits for Business Analysis",
                "Practicum for Information System",
                "Entrepreneurial Mind",
                "Financial Management",
                "Media Ethics",
                "Gender and Society",
                "Pagtuturo at Pagtataya"
            ],
            'ACT' => [
                "Computer Hardware Fundamentals",
                "Operating System, Principles and Applications",
                "Network and Communications"
            ],
            'IS_ACT' => [
                "Professional Skills in ICT",
                "Fundamentals of Information System",
                "Computer Programming 1",
                "Computer Programming 2",
                "Introduction to Computing",
                "Data Structures and Algorithms",
                "Responsive Web Design",
                "Organization and Management",
                "Web Application Development",
                "Web Application Development 2",
                "IS Infrastructure and Network Technology",
                "Information Management",
                "Proffesional Issues in Information System",
                "Discrete Structures",
                "Human Computer Interaction",
                "Math Logic",
                "System Analysis, Design and Development",
                "Pagtuturo at Pagtataya"
            ]
        ];

        $allCourses = array_unique(array_merge(...array_values($courseGroups)));

        sort($allCourses);

        foreach ($allCourses as $course) {
            Course::firstOrCreate(['course' => $course]);
        }

    }
}
