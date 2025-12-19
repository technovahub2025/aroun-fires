-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2025 at 06:27 PM
-- Server version: 10.6.23-MariaDB
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seytest_adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb1_admin`
--

CREATE TABLE `tb1_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `crm_id` varchar(255) NOT NULL,
  `created_log` datetime NOT NULL,
  `updated_log` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb1_admin`
--

INSERT INTO `tb1_admin` (`id`, `name`, `email`, `phone`, `position`, `password`, `status`, `crm_id`, `created_log`, `updated_log`) VALUES
(1, 'Seyfert Admin', 'superadmin@gmail.com', '9597390711', '1', '$2y$12$YmD/zhIaYEjsSiDgFuvlpOBn1qt2r5H1V/pIiyqcYKqkoIxVnWnRe', '1', '1', '2024-08-19 10:45:13', '2024-11-20 12:07:35'),
(3, 'Admin Team', 'admin@gmail.com', '1234567890', '2', '$2y$12$YmD/zhIaYEjsSiDgFuvlpOBn1qt2r5H1V/pIiyqcYKqkoIxVnWnRe', '1', '1', '2024-09-13 13:46:55', '2024-11-20 12:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_blog`
--

CREATE TABLE `tb1_blog` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `title` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `crm_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb1_blog`
--

INSERT INTO `tb1_blog` (`id`, `image`, `title`, `url`, `content`, `status`, `crm_id`, `created_at`, `updated_at`) VALUES
(7, '1761563675_1 (1).png', 'The Lifeline on High: Ensuring Safety with Fixed Lifeline Systems', 'the-lifeline-on-high-ensuring-safety-with-fixed-lifeline-systems', 'Look around any modern city or industrial complex, and you\'ll see them: the maintenance worker scaling a communication tower, the window washer descending a gleaming skyscraper, or the engineer inspecting a rooftop HVAC unit. These professionals perform their duties dozens, even hundreds, of feet in the air, where a single misstep can be catastrophic.</p><p>What keeps them safe? Often, the answer is a system so fundamental and reliable that it\'s known as a \"lifeline.\" But not all lifelines are created equal. While temporary systems have their place, <strong>Fixed Lifeline Systems</strong> are the unsung heroes of permanent fall protection, offering a continuous layer of safety for those who work at height.</p><h3>What is a Fixed Lifeline System?</h3><p>Imagine a sturdy, high-strength cable, rigid rail, or track permanently installed along a roof edge, atop a parapet, or up the side of a structure. Workers connect their full-body harnesses to this system via a traveling shuttle or trolley. This setup allows them to move freely along the entire length of the system, all while remaining securely attached.</p><p><strong>KEY FEATURE:</strong> Unlike portable lanyards that need to be constantly disconnected and reconnected—creating dangerous periods of exposure—a fixed lifeline provides 100% tie-off, 100% of the time.</p><h3>Why Go Fixed? The Unbeatable Advantages</h3><p>Choosing a fixed lifeline system isn\'t just about compliance; it\'s about committing to a culture of safety. Here\'s why they are a superior solution for many work environments:</p><p><br></p><h3>Where Do Fixed Lifeline Systems Shine?</h3><p>You\'ll find these systems wherever there is a recurring need for work at height:</p><p><br></p><h3>The Anatomy of a Safe Installation: It\'s More Than Just a Cable</h3><p>A reliable fixed lifeline system isn\'t something you simply bolt down. It\'s a carefully planned process:</p><ol><li><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Risk Assessment &amp; Design:</strong> A qualified engineer assesses the site and designs a system for complete coverage</li><li><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Quality Components:</strong> All parts must be rated for the potential forces of a fall arrest</li><li><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Professional Installation:</strong> Critical to ensure the system performs as intended</li><li><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Training &amp; Inspection:</strong> Workers must be trained, and the system must be regularly inspected</li></ol><h3>The Final Word: An Investment in People</h3><p>A Fixed Lifeline System is more than just equipment; <strong>it\'s a permanent statement that the safety of your team is non-negotiable.</strong> It\'s the silent guardian on the high steel and the peace of mind for everyone on the ground.</p><p>By investing in a properly designed and installed fixed lifeline, you\'re not just preventing falls—you\'re building a foundation of trust and security that allows your business to reach new heights, safely.</p><p><strong>Ready to explore how a fixed lifeline system can protect your team? Contact a qualified fall protection specialist today for a site assessment.</strong>', '1', '1', '2025-03-10 14:21:19', '2025-10-27 17:24:15'),
(8, '1761563636_2.png', 'Beyond the Extinguisher: Building Complete Fire Safety Ecosystem', 'beyond-the-extinguisher-building-complete-fire-safety-ecosystem', '&lt;h2&gt;Beyond the Extinguisher: Building Your Complete Fire Safety Ecosystem&lt;/h2&gt;&lt;p&gt;For decades, the fire extinguisher has been the iconic symbol of workplace fire safety. But what if we told you that relying on that red cylinder alone is like having a band-aid for a system-wide health crisis? True fire safety isn\'t a single device; it\'s a &lt;strong&gt;multi-layered ecosystem&lt;/strong&gt; designed to prevent, detect, contain, and evacuate.&lt;p&gt;It\'s time to think beyond the extinguisher and build a comprehensive defense strategy that protects your people, assets, and continuity.&lt;h3&gt;The Four Pillars of a Fire Safety Ecosystem&lt;/h3&gt;&lt;p&gt;A robust fire safety plan rests on four critical pillars, working in harmony:&lt;ul&gt;&lt;li&gt;&lt;strong&gt;Pillar 1: Prevention &amp; Mitigation&lt;/strong&gt; (Proactive Defense)&lt;li&gt;&lt;strong&gt;Pillar 2: Detection &amp; Alert&lt;/strong&gt; (Early Warning)&lt;li&gt;&lt;strong&gt;Pillar 3: Suppression &amp; Containment&lt;/strong&gt; (Active Response)&lt;li&gt;&lt;strong&gt;Pillar 4: Evacuation &amp; Communication&lt;/strong&gt; (Life Safety)&lt;/ul&gt;&lt;h3&gt;Pillar 1: Prevention &amp; Mitigation - Stopping Fire Before It Starts&lt;/h3&gt;&lt;p&gt;This is your first and most crucial line of defense. Prevention focuses on eliminating hazards before they can ignite.&lt;ul&gt;&lt;li&gt;&lt;strong&gt;Electrical Safety:&lt;/strong&gt; Regular inspections of wiring, panels, and equipment to prevent one of the most common causes of industrial fires.&lt;li&gt;&lt;strong&gt;Housekeeping &amp; Storage:&lt;/strong&gt; Proper storage of flammable materials and combustible waste. A cluttered facility is a fuel-rich environment.&lt;li&gt;&lt;strong&gt;Hot Work Programs:&lt;/strong&gt; Strict protocols and permits for activities like welding, grinding, and cutting.&lt;li&gt;&lt;strong&gt;Employee Training:&lt;/strong&gt; Educating staff on fire hazards specific to their tasks and workspace.&lt;/ul&gt;&lt;h3&gt;Pillar 2: Detection &amp; Alert - The Critical First Seconds&lt;/h3&gt;&lt;p&gt;When prevention fails, early detection is everything. This layer ensures a fire is discovered at the smoldering stage, not when it\'s raging.&lt;ul&gt;&lt;li&gt;&lt;strong&gt;Smoke &amp; Heat Detectors:&lt;/strong&gt; A properly designed network of detectors provides the earliest possible warning.&lt;li&gt;&lt;strong&gt;Alarm Systems:&lt;/strong&gt; Audible and visual alarms (strobes) that are unmistakable throughout the entire facility, including high-noise areas.&lt;li&gt;&lt;strong&gt;Emergency Communication Systems:&lt;/strong&gt; These systems do more than sound an alarm; they provide clear, automated voice instructions to guide occupants.&lt;/ul&gt;&lt;h3&gt;Pillar 3: Suppression &amp; Containment - Controlling the Outbreak&lt;/h3&gt;&lt;p&gt;This is where the fire extinguisher plays its role—as one part of a much larger system.&lt;ul&gt;&lt;li&gt;&lt;strong&gt;Fire Extinguishers:&lt;/strong&gt; The right type (A, B, C, D, K) placed in accessible locations, with trained staff ready to use them on &lt;em&gt;incipient&lt;/em&gt; fires.&lt;li&gt;&lt;strong&gt;Automatic Sprinkler Systems:&lt;/strong&gt; The true workhorses of fire suppression. They control or extinguish fires 96% of the time, often before the fire department even arrives.&lt;li&gt;&lt;strong&gt;Fire Doors &amp; Partitions:&lt;/strong&gt; Passive fire protection that compartmentalizes a building, slowing the spread of smoke and flames to protect escape routes and adjacent areas.&lt;/ul&gt;&lt;h3&gt;Pillar 4: Evacuation &amp; Communication - Ensuring Everyone Gets Out Safe&lt;/h3&gt;&lt;p&gt;All other measures are meaningless if people cannot escape. This pillar is solely focused on life safety.&lt;ul&gt;&lt;li&gt;&lt;strong&gt;Clear Egress Paths:&lt;/strong&gt; Well-marked, unobstructed, and adequately lit exit routes leading to a place of safety.&lt;li&gt;&lt;strong&gt;Emergency Lighting:&lt;/strong&gt; Illuminates escape paths when primary power fails.&lt;li&gt;&lt;strong&gt;Accountability Systems:&lt;/strong&gt; Designated meeting points, visitor logs, and employee training for headcounts after evacuation.&lt;li&gt;&lt;strong&gt;Regular Drills:&lt;/strong&gt; Practice makes perfect. Drills build muscle memory and reduce panic in a real emergency.&lt;/ul&gt;&lt;h3&gt;Integration is Key: How the Ecosystem Works Together&lt;/h3&gt;&lt;p&gt;Imagine a fire starts in a storage closet. Here\'s the ecosystem in action:&lt;ol&gt;&lt;li&gt;&lt;strong&gt;Detection:&lt;/strong&gt; A smoke detector senses the fire and signals the alarm panel.&lt;li&gt;&lt;strong&gt;Alert &amp; Communication:&lt;/strong&gt; The panel triggers horns and strobes, and the emergency communication system broadcasts: \"A fire has been reported. Proceed to the nearest exit.\"&lt;li&gt;&lt;strong&gt;Containment:&lt;/strong&gt; A self-closing fire door contains the smoke and flames within the closet.&lt;li&gt;&lt;strong&gt;Suppression:&lt;/strong&gt; The heat from the fire activates a single sprinkler head directly over the fire, suppressing it.&lt;li&gt;&lt;strong&gt;Evacuation:&lt;/strong&gt; Employees, trained through regular drills, calmly proceed along lit egress paths to their designated assembly point.&lt;/ol&gt;&lt;p&gt;No single device could have achieved this outcome. The &lt;strong&gt;integrated system&lt;/strong&gt; did.&lt;h3&gt;Building Your Ecosystem: A Call to Action&lt;/h3&gt;&lt;p&gt;Moving beyond the extinguisher requires a shift from reactive compliance to proactive risk management.&lt;p&gt;&lt;strong&gt;Your Next Steps:&lt;/strong&gt;&lt;ol&gt;&lt;li&gt;&lt;strong&gt;Conduct a Risk Assessment:&lt;/strong&gt; Identify the unique fire hazards in your facility.&lt;li&gt;&lt;strong&gt;Audit Your Existing Systems:&lt;/strong&gt; Are all four pillars present, integrated, and well-maintained?&lt;li&gt;&lt;strong&gt;Prioritize Training &amp; Drills:&lt;/strong&gt; Your people are the most important component of your ecosystem.&lt;li&gt;&lt;strong&gt;Partner with Experts:&lt;/strong&gt; Work with fire safety professionals to design, install, and maintain your complete ecosystem.&lt;/ol&gt;&lt;p&gt;Don\'t just place a band-aid on a critical risk. Build a resilient, intelligent fire safety ecosystem that ensures when seconds count, your entire organization is ready.&lt;p&gt;&lt;strong&gt;Is your fire safety strategy a single tool or a complete ecosystem? Contact a fire safety specialist today to schedule a comprehensive site assessment.&lt;/strong&gt;', '1', '1', '2025-10-27 16:43:56', '2025-10-27 17:24:34'),
(9, '1761563843_3.png', 'Your Second Skin: Complete Guide to Personal Protective Equipment', 'your-second-skin-complete-guide-to-personal-protective-equipment', '&lt;h1&gt;Your Second Skin: The Complete Guide to Personal Protective Equipment (PPE)&lt;/h1&gt;</p><p><br></p><p>&lt;p&gt;In any workplace where hazards can\'t be completely engineered out, Personal Protective Equipment becomes your \"second skin\" – the critical barrier between you and potential harm. This comprehensive guide will walk you through everything you need to know about building your PPE strategy.&lt;/p&gt;</p><p><br></p><p>&lt;h2&gt;Understanding the PPE Hierarchy&lt;/h2&gt;</p><p>&lt;p&gt;&lt;strong&gt;Remember:&lt;/strong&gt; PPE is the &lt;strong&gt;last line of defense&lt;/strong&gt;. It should complement other safety measures like engineering controls and administrative controls.&lt;/p&gt;</p><p><br></p><p>&lt;h2&gt;The Major Categories of PPE&lt;/h2&gt;</p><p><br></p><p>&lt;h3&gt;1. Head Protection&lt;/h3&gt;</p><p>&lt;ul&gt;</p><p>&lt;li&gt;&lt;strong&gt;When needed:&lt;/strong&gt; Falling objects, overhead hazards, electrical exposure&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Key equipment:&lt;/strong&gt; Hard hats, bump caps, helmets&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Classes:&lt;/strong&gt; G (General), E (Electrical), C (Conductive)&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Maintenance:&lt;/strong&gt; Regular inspection for dents, cracks, and UV damage&lt;/li&gt;</p><p>&lt;/ul&gt;</p><p><br></p><p>&lt;h3&gt;2. Eye and Face Protection&lt;/h3&gt;</p><p>&lt;ul&gt;</p><p>&lt;li&gt;&lt;strong&gt;When needed:&lt;/strong&gt; Flying particles, chemical splashes, radiation&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Key equipment:&lt;/strong&gt; Safety glasses, goggles, face shields, welding helmets&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Selection:&lt;/strong&gt; Match protection type to specific hazard&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Critical:&lt;/strong&gt; Always ensure proper fit and complete coverage&lt;/li&gt;</p><p>&lt;/ul&gt;</p><p><br></p><p>&lt;h3&gt;3. Hearing Protection&lt;/h3&gt;</p><p>&lt;ul&gt;</p><p>&lt;li&gt;&lt;strong&gt;When needed:&lt;/strong&gt; Noise levels above 85 dBA&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Key equipment:&lt;/strong&gt; Earplugs, earmuffs, semi-insert devices&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Selection:&lt;/strong&gt; Match NRR to noise environment, consider comfort&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Training:&lt;/strong&gt; Proper insertion techniques essential&lt;/li&gt;</p><p>&lt;/ul&gt;</p><p><br></p><p>&lt;h3&gt;4. Respiratory Protection&lt;/h3&gt;</p><p>&lt;ul&gt;</p><p>&lt;li&gt;&lt;strong&gt;When needed:&lt;/strong&gt; Dust, fumes, vapors, oxygen-deficient atmospheres&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Key equipment:&lt;/strong&gt; Disposable to full-face respirators, supplied-air systems&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Requirements:&lt;/strong&gt; Medical evaluation, fit testing, comprehensive training&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Maintenance:&lt;/strong&gt; Regular cartridge changes and cleaning&lt;/li&gt;</p><p>&lt;/ul&gt;</p><p><br></p><p>&lt;h3&gt;5. Hand Protection&lt;/h3&gt;</p><p>&lt;ul&gt;</p><p>&lt;li&gt;&lt;strong&gt;When needed:&lt;/strong&gt; Chemical exposure, cuts, abrasions, temperature extremes&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Key equipment:&lt;/strong&gt; Chemical-resistant, cut-resistant, thermal gloves&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Selection:&lt;/strong&gt; Match material to specific hazards, ensure proper sizing&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Inspection:&lt;/strong&gt; Check for tears and degradation before each use&lt;/li&gt;</p><p>&lt;/ul&gt;</p><p><br></p><p>&lt;h3&gt;6. Body Protection&lt;/h3&gt;</p><p>&lt;ul&gt;</p><p>&lt;li&gt;&lt;strong&gt;When needed:&lt;/strong&gt; Chemical exposure, extreme temperatures, impact hazards&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Key equipment:&lt;/strong&gt; Coveralls, aprons, lab coats, high-visibility clothing&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Selection:&lt;/strong&gt; Choose materials based on specific hazards&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Fit:&lt;/strong&gt; Ensure proper fit without restriction&lt;/li&gt;</p><p>&lt;/ul&gt;</p><p><br></p><p>&lt;h3&gt;7. Foot Protection&lt;/h3&gt;</p><p>&lt;ul&gt;</p><p>&lt;li&gt;&lt;strong&gt;When needed:&lt;/strong&gt; Falling objects, electrical hazards, slippery surfaces&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Key equipment:&lt;/strong&gt; Steel-toe boots, metatarsal guards, electrical-hazard shoes&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Selection:&lt;/strong&gt; Match protection to workplace hazards&lt;/li&gt;</p><p>&lt;li&gt;&lt;strong&gt;Comfort:&lt;/strong&gt; Consider all-day wear requirements&lt;/li&gt;</p><p>&lt;/ul&gt;</p><p><br></p><p>&lt;h2&gt;Building an Effective PPE Program&lt;/h2&gt;</p><p><br></p><p>&lt;h3&gt;1. Hazard Assessment&lt;/h3&gt;</p><p>&lt;p&gt;Conduct thorough workplace assessments to identify all potential hazards.&lt;/p&gt;</p><p><br></p><p>&lt;h3&gt;2. Proper Selection&lt;/h3&gt;</p><p>&lt;p&gt;Choose PPE that provides adequate protection, fits properly, and doesn\'t create new hazards.&lt;/p&gt;</p><p><br></p><p>&lt;h3&gt;3. Employee Training&lt;/h3&gt;</p><p>&lt;p&gt;Train workers on when PPE is necessary, how to use it properly, and its limitations.&lt;/p&gt;</p><p><br></p><p>&lt;h3&gt;4. Fit Testing and Comfort&lt;/h3&gt;</p><p>&lt;p&gt;Ensure proper fit through individual assessment and address comfort concerns.&lt;/p&gt;</p><p><br></p><p>&lt;h3&gt;5. Maintenance and Replacement&lt;/h3&gt;</p><p>&lt;p&gt;Establish procedures for cleaning, inspection, storage, and timely replacement.&lt;/p&gt;</p><p><br></p><p>&lt;h2&gt;Common PPE Mistakes to Avoid&lt;/h2&gt;</p><p>&lt;ul&gt;</p><p>&lt;li&gt;One-size-fits-all approach&lt;/li&gt;</p><p>&lt;li&gt;Mixing incompatible equipment&lt;/li&gt;</p><p>&lt;li&gt;Poor maintenance&lt;/li&gt;</p><p>&lt;li&gt;Inadequate training&lt;/li&gt;</p><p>&lt;li&gt;Complacency with \"quick jobs\"&lt;/li&gt;</p><p>&lt;/ul&gt;</p><p><br></p><p>&lt;h2&gt;PPE Program Checklist&lt;/h2&gt;</p><p>&lt;ul&gt;</p><p>&lt;li&gt;Conducted hazard assessment&lt;/li&gt;</p><p>&lt;li&gt;Selected appropriate PPE for each hazard&lt;/li&gt;</p><p>&lt;li&gt;Established fit testing procedures&lt;/li&gt;</p><p>&lt;li&gt;Developed comprehensive training program&lt;/li&gt;</p><p>&lt;li&gt;Created maintenance and replacement schedule&lt;/li&gt;</p><p>&lt;li&gt;Implemented compliance monitoring&lt;/li&gt;</p><p>&lt;li&gt;Scheduled regular program reviews&lt;/li&gt;</p><p>&lt;/ul&gt;</p><p><br></p><p>&lt;h2&gt;The Bottom Line&lt;/h2&gt;</p><p>&lt;p&gt;Your PPE is more than just equipment – it\'s your second skin, your personal protection system that goes with you wherever the hazards are. A well-planned PPE program demonstrates a genuine commitment to worker safety and well-being.&lt;/p&gt;</p><p><br></p><p>&lt;p&gt;&lt;strong&gt;Remember:&lt;/strong&gt; The most expensive PPE is the kind that sits unused. Invest in the right equipment, proper training, and a strong safety culture.&lt;/p&gt;</p><p><br></p><p>&lt;p&gt;&lt;strong&gt;Ready to enhance your PPE program? Contact our safety specialists for a comprehensive assessment of your protective equipment needs.&lt;/strong&gt;&lt;/p&gt;', '1', '1', '2025-10-27 16:47:23', '2025-10-27 17:24:51'),
(10, '1761564013_4.png', 'Knowledge is Safety: Critical Role of Professional Safety Training', 'knowledge-is-safety-critical-role-of-professional-safety-training', '&lt;h2&gt;Knowledge is Safety: The Critical Role of Professional Safety Training&lt;/h2&gt;&lt;p&gt;In today\'s complex work environments, safety is no longer just about following rules—it\'s about understanding risks, making smart decisions, and creating a culture where every employee returns home safely each day.&lt;h3&gt;Beyond Compliance: Why Training Matters More Than Ever&lt;/h3&gt;&lt;p&gt;Effective safety training goes far beyond checking regulatory boxes:&lt;ul&gt;&lt;li&gt;&lt;strong&gt;Empowers employees&lt;/strong&gt; to recognize and respond to hazards&lt;li&gt;&lt;strong&gt;Builds confidence&lt;/strong&gt; to speak up about unsafe conditions&lt;li&gt;&lt;strong&gt;Creates critical thinkers&lt;/strong&gt; who can assess risks in real-time&lt;li&gt;&lt;strong&gt;Fosters a safety culture&lt;/strong&gt; that becomes organizational DNA&lt;/ul&gt;&lt;h3&gt;The Real Cost of Inadequate Training&lt;/h3&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;Human Cost:&lt;/strong&gt; Workplace injuries and fatalities&lt;li&gt;&lt;strong&gt;Financial Impact:&lt;/strong&gt; Workers\' compensation claims and productivity losses&lt;li&gt;&lt;strong&gt;Reputational Damage:&lt;/strong&gt; Loss of client trust and talent attraction issues&lt;li&gt;&lt;strong&gt;Operational Disruption:&lt;/strong&gt; Project delays and increased insurance costs&lt;/ul&gt;&lt;h3&gt;Key Components of Effective Safety Training&lt;/h3&gt;&lt;h4&gt;1. Hazard-Specific Training&lt;/h4&gt;&lt;ul&gt;&lt;li&gt;Industry-specific risks&lt;li&gt;Equipment-specific protocols&lt;li&gt;Environment-specific challenges&lt;li&gt;Task-specific procedures&lt;/ul&gt;&lt;h4&gt;2. Hands-On Practical Exercises&lt;/h4&gt;&lt;ul&gt;&lt;li&gt;Real-world scenario practice&lt;li&gt;Equipment operation drills&lt;li&gt;Emergency response simulations&lt;li&gt;Muscle memory development&lt;/ul&gt;&lt;h4&gt;3. Continuous Learning Approach&lt;/h4&gt;&lt;ul&gt;&lt;li&gt;Regular refresher courses&lt;li&gt;Updates for new equipment and procedures&lt;li&gt;Lessons learned from near-misses&lt;li&gt;Ongoing skill validation&lt;/ul&gt;&lt;h4&gt;4. Engagement and Retention Strategies&lt;/h4&gt;&lt;ul&gt;&lt;li&gt;Interactive learning methods&lt;li&gt;Real-life case studies&lt;li&gt;Practical applications&lt;li&gt;Regular knowledge checks&lt;/ul&gt;&lt;h3&gt;The Training Spectrum: From New Hire to Seasoned Pro&lt;/h3&gt;&lt;h4&gt;For New Employees&lt;/h4&gt;&lt;ul&gt;&lt;li&gt;Foundation safety principles&lt;li&gt;Company-specific protocols&lt;li&gt;Emergency procedures&lt;li&gt;Reporting mechanisms&lt;/ul&gt;&lt;h4&gt;For Experienced Workers&lt;/h4&gt;&lt;ul&gt;&lt;li&gt;Advanced hazard recognition&lt;li&gt;Mentorship training&lt;li&gt;Incident investigation skills&lt;li&gt;Safety leadership development&lt;/ul&gt;&lt;h4&gt;For Supervisors and Managers&lt;/h4&gt;&lt;ul&gt;&lt;li&gt;Legal responsibilities&lt;li&gt;Risk assessment techniques&lt;li&gt;Safety program management&lt;li&gt;Cultural leadership skills&lt;/ul&gt;&lt;h3&gt;Measuring Training Effectiveness&lt;/h3&gt;&lt;ul&gt;&lt;li&gt;Reduced incident rates&lt;li&gt;Improved safety observations&lt;li&gt;Increased near-miss reporting&lt;li&gt;Enhanced safety conversations&lt;li&gt;Better compliance audits&lt;/ul&gt;&lt;h3&gt;Building a Learning Culture&lt;/h3&gt;&lt;ul&gt;&lt;li&gt;Toolbox talks and safety moments&lt;li&gt;Peer-to-peer coaching&lt;li&gt;Cross-training opportunities&lt;li&gt;Continuous improvement feedback loops&lt;/ul&gt;&lt;h3&gt;The ROI of Safety Training&lt;/h3&gt;&lt;ul&gt;&lt;li&gt;Reduced workers\' compensation costs&lt;li&gt;Lower equipment repair and replacement&lt;li&gt;Increased productivity and uptime&lt;li&gt;Improved employee retention&lt;li&gt;Enhanced company reputation&lt;/ul&gt;&lt;h3&gt;Your Training Action Plan&lt;/h3&gt;&lt;ol&gt;&lt;li&gt;Assess current training gaps and needs&lt;li&gt;Develop a comprehensive training matrix for all roles&lt;li&gt;Choose qualified instructors with relevant experience&lt;li&gt;Implement a mix of delivery methods&lt;li&gt;Establish clear metrics for measuring effectiveness&lt;li&gt;Create a continuous improvement cycle&lt;/ol&gt;&lt;h3&gt;The Bottom Line: Knowledge Saves Lives&lt;/h3&gt;&lt;p&gt;Professional safety training isn\'t an expense—it\'s an investment in your most valuable asset: your people. When employees understand not just what to do, but why they\'re doing it, they become active participants in their own safety.&lt;p&gt;&lt;strong&gt;Ready to build a safer workplace through knowledge? Contact our safety training specialists to develop a customized program that addresses your unique risks and transforms your safety culture.&lt;/strong&gt;&lt;p&gt;&lt;em&gt;Remember: In the world of workplace safety, what you don\'t know can hurt you. Invest in knowledge—it\'s the one safety tool that never wears out.&lt;/em&gt;', '1', '1', '2025-10-27 16:50:14', '2025-10-27 17:25:03');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_catalogue`
--

CREATE TABLE `tb1_catalogue` (
  `id` int(11) NOT NULL,
  `file` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `crm_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb1_category`
--

CREATE TABLE `tb1_category` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `crm_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb1_category`
--

INSERT INTO `tb1_category` (`id`, `category`, `status`, `crm_id`, `created_at`, `updated_at`) VALUES
(1, 'Others', '1', '1', '2025-03-06 16:00:14', '2025-03-06 16:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_contact`
--

CREATE TABLE `tb1_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb1_contact`
--

INSERT INTO `tb1_contact` (`id`, `name`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sadf', 'seyfertdeveloperteam@gmail.com', 'asdf', 'asdf', '1', '2025-07-16 13:23:20', '2025-07-16 13:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_enquiry`
--

CREATE TABLE `tb1_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb1_gallery`
--

CREATE TABLE `tb1_gallery` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `category_id` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `crm_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb1_gallery`
--

INSERT INTO `tb1_gallery` (`id`, `image`, `category_id`, `status`, `crm_id`, `created_at`, `updated_at`) VALUES
(35, '1761566793_1.png', '1', '1', '1', '2025-10-27 12:06:34', '2025-10-27 12:06:34'),
(36, '1761566794_2.png', '1', '1', '1', '2025-10-27 12:06:34', '2025-10-27 12:06:34'),
(37, '1761568008_3.png', '1', '1', '1', '2025-10-27 12:26:48', '2025-10-27 12:26:48'),
(38, '1761568008_4.png', '1', '1', '1', '2025-10-27 12:26:48', '2025-10-27 12:26:48'),
(39, '1761568008_5.png', '1', '1', '1', '2025-10-27 12:26:48', '2025-10-27 12:26:48'),
(40, '1761568008_6.png', '1', '1', '1', '2025-10-27 12:26:48', '2025-10-27 12:26:48'),
(41, '1761568008_7.png', '1', '1', '1', '2025-10-27 12:26:48', '2025-10-27 12:26:48'),
(42, '1761568008_8.png', '1', '1', '1', '2025-10-27 12:26:48', '2025-10-27 12:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_latest_news`
--

CREATE TABLE `tb1_latest_news` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `crm_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb1_latest_news`
--

INSERT INTO `tb1_latest_news` (`id`, `message`, `status`, `crm_id`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to Executive Inn, Pondicherry – Call or WhatsApp us to Book Now!', '1', '1', '2025-03-06 11:26:59', '2025-07-16 11:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_mainproduct`
--

CREATE TABLE `tb1_mainproduct` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `crm_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb1_mainproduct`
--

INSERT INTO `tb1_mainproduct` (`id`, `product_name`, `description`, `image`, `status`, `crm_id`, `created_at`, `updated_at`) VALUES
(8, 'Snake Catcher', 'Durable and lightweight snake catcher made from stainless steel with a comfortable red handle and non-slip rubber jaw for a firm, gentle grip. Ideal for safely catching and releasing snakes at home, in gardens, or during rescue operations.', '1761557114_blob.png', '1', '1', '2025-10-27 14:55:14', '2025-10-27 14:55:14'),
(9, 'Under Vehicle Mirror', 'Durable and lightweight inspection mirror designed for security checks under vehicles. Features a wide convex mirror for a clear, wide-angle view and an adjustable handle for easy maneuvering. Ideal for use in security checkpoints, parking lots, and inspection areas.', '1761557340_blob.png', '1', '1', '2025-10-27 14:59:00', '2025-10-27 14:59:00'),
(10, 'Emergency light', 'Bright and energy-efficient emergency light with long-lasting LED bulbs. Features a rechargeable battery, durable body, and easy portability. Ideal for homes, offices, and outdoor use during power cuts or emergencies.', '1761557712_blob.png', '1', '1', '2025-10-27 15:05:12', '2025-10-27 15:05:12'),
(11, 'Spark Arrester', 'Durable and efficient device designed to prevent sparks from escaping exhaust systems, reducing fire hazards. Made from high-quality stainless steel for long-lasting performance, it’s ideal for generators, engines, and industrial equipment operating in fire-prone areas.', '1761558873_blob.png', '1', '1', '2025-10-27 15:24:33', '2025-10-27 15:24:33'),
(12, 'Environmental & Safety Measuring Instruments', 'Accurate and easy-to-use device for measuring noise levels in decibels (dB). Ideal for monitoring sound in workplaces, factories, construction sites, and environmental studies. Features a clear digital display, wide measuring range, and high sensitivity for precise sound analysis.', '1761559147_blob.png', '1', '1', '2025-10-27 15:29:07', '2025-10-27 15:29:07'),
(13, 'Breathing Apparatus & Safety Equipment', 'Powerful and portable blower designed to remove smoke, fumes, and toxic gases from confined or hazardous areas. Made with a durable body and high-speed motor for efficient ventilation. Ideal for firefighting, industrial maintenance, and emergency rescue operations to ensure clean air and safe working conditions.', '1761559405_blob.png', '1', '1', '2025-10-27 15:33:25', '2025-10-27 15:33:25'),
(14, 'Signages', 'Durable and highly visible safety signages designed to convey warnings, directions, and safety instructions in workplaces. Made from quality materials for indoor and outdoor use, these signboards help prevent accidents and ensure compliance with safety regulations. Ideal for factories, construction sites, offices, and public areas.', '1761559607_blob.png', '1', '1', '2025-10-27 15:36:47', '2025-10-27 15:36:47'),
(15, 'Industrial Spill Management Equipment', 'Strong and chemical-resistant pallet designed to safely store drums and containers, preventing hazardous liquid spills and leaks. Features a leak-proof sump for easy collection and cleanup. Ideal for warehouses, laboratories, and industrial facilities handling oils, chemicals, or fuels.', '1761559919_blob.png', '1', '1', '2025-10-27 15:41:59', '2025-10-27 15:41:59'),
(16, 'Solar Delineator', 'High-visibility road safety device powered by solar energy, designed to guide drivers in low-light or nighttime conditions. Features bright LED lights with automatic charging and dusk-to-dawn operation. Durable, weather-resistant, and easy to install—ideal for highways, curves, medians, and construction zones.', '1761560281_blob.png', '1', '1', '2025-10-27 15:48:01', '2025-10-27 15:48:01'),
(17, 'Barricading Net', 'Durable and high-visibility safety net used for marking restricted or hazardous areas. Made from strong, weather-resistant plastic material, it is lightweight, reusable, and easy to install. Ideal for construction sites, road works, and crowd control applications.', '1761564121_blob.png', '1', '1', '2025-10-27 16:52:01', '2025-10-27 16:52:01');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_subproduct`
--

CREATE TABLE `tb1_subproduct` (
  `id` int(11) NOT NULL,
  `main_product_id` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `url` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `crm_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb1_subproduct`
--

INSERT INTO `tb1_subproduct` (`id`, `main_product_id`, `name`, `price`, `description`, `image`, `url`, `status`, `crm_id`, `created_at`, `updated_at`) VALUES
(5, '8', 'Snake Catcher', '100', 'Durable and lightweight snake catcher made from stainless steel with a comfortable red handle and non-slip rubber jaw for a firm, gentle grip. Ideal for safely catching and releasing snakes at home, in gardens, or during rescue operations.', '1761557181_blob.png', 'snake-catcher', '1', '1', '2025-10-27 14:56:21', '2025-10-27 14:56:21'),
(6, '9', 'Under Vehicle Mirror', '100', 'Durable and lightweight inspection mirror designed for security checks under vehicles. Features a wide convex mirror for a clear, wide-angle view and an adjustable handle for easy maneuvering. Ideal for use in security checkpoints, parking lots, and inspection areas.', '1761557418_blob.png', 'under-vehicle-mirror', '1', '1', '2025-10-27 15:00:18', '2025-10-27 15:00:18'),
(7, '10', 'Stealthlite 2450', '100', 'High-performance LED flashlight designed for tough environments. The StealthLite 2450 offers powerful brightness, durable construction, and is water- and corrosion-resistant. Powered by rechargeable batteries, it delivers reliable illumination for industrial, marine, and emergency use.', '1761557796_blob.png', 'stealthlite-2450', '1', '1', '2025-10-27 15:06:36', '2025-10-27 15:06:36'),
(8, '11', 'Spark Arrester', '100', 'Durable and efficient device designed to prevent sparks from escaping exhaust systems, reducing fire hazards. Made from high-quality stainless steel for long-lasting performance, it’s ideal for generators, engines, and industrial equipment operating in fire-prone areas.', '1761558914_blob.png', 'spark-arrester', '1', '1', '2025-10-27 15:25:14', '2025-10-27 15:25:14'),
(9, '12', 'Sound Level Meter', '100', 'Accurate and easy-to-use device for measuring noise levels in decibels (dB). Ideal for monitoring sound in workplaces, factories, construction sites, and environmental studies. Features a clear digital display, wide measuring range, and high sensitivity for precise sound analysis.', '1761559192_blob.png', 'sound-level-meter', '1', '1', '2025-10-27 15:29:52', '2025-10-27 15:29:52'),
(10, '13', 'Smoke and fume exhausting blower', '100', 'Powerful and portable blower designed to remove smoke, fumes, and toxic gases from confined or hazardous areas. Made with a durable body and high-speed motor for efficient ventilation. Ideal for firefighting, industrial maintenance, and emergency rescue operations to ensure clean air and safe working conditions.', '1761559445_blob.png', 'smoke-and-fume-exhausting-blower', '1', '1', '2025-10-27 15:34:05', '2025-10-27 15:34:05'),
(11, '14', 'Signages', '100', 'Durable and highly visible safety signages designed to convey warnings, directions, and safety instructions in workplaces. Made from quality materials for indoor and outdoor use, these signboards help prevent accidents and ensure compliance with safety regulations. Ideal for factories, construction sites, offices, and public areas.', '1761559707_blob.png', 'signages-', '1', '1', '2025-10-27 15:38:27', '2025-10-27 15:38:27'),
(12, '15', 'spill containment pallet', '100', 'Strong and chemical-resistant pallet designed to safely store drums and containers, preventing hazardous liquid spills and leaks. Features a leak-proof sump for easy collection and cleanup. Ideal for warehouses, laboratories, and industrial facilities handling oils, chemicals, or fuels.', '1761559993_blob.png', 'spill-containment-pallet', '1', '1', '2025-10-27 15:43:13', '2025-10-27 15:43:13'),
(13, '15', 'barrell dolly', '100', 'Heavy-duty and easy-to-maneuver trolley designed for safely transporting drums and barrels. Built with sturdy wheels and a strong steel frame for smooth movement and stability. Ideal for warehouses, factories, and chemical plants to handle heavy barrels with ease and reduce manual effort.', '1761560178_blob.png', 'barrell-dolly', '1', '1', '2025-10-27 15:46:18', '2025-10-27 15:46:18'),
(14, '16', 'Solar-Delineator', '100', 'High-visibility road safety device powered by solar energy, designed to guide drivers in low-light or nighttime conditions. Features bright LED lights with automatic charging and dusk-to-dawn operation. Durable, weather-resistant, and easy to install—ideal for highways, curves, medians, and construction zones.', '1761560321_blob.png', 'solar-delineator', '1', '1', '2025-10-27 15:48:41', '2025-10-27 15:48:41'),
(15, '10', 'Halogen Search Lights', '100', 'Powerful and durable search light equipped with a high-intensity halogen bulb for bright, long-range illumination. Designed for outdoor, rescue, and security operations, it offers a strong beam, sturdy handle, and rechargeable battery. Ideal for police, marine, industrial, and emergency use.', '1761564070_blob.png', 'halogen-search-lights', '1', '1', '2025-10-27 16:51:10', '2025-10-27 16:51:10'),
(16, '17', 'Barricading Net', '100', 'Durable and high-visibility safety net used for marking restricted or hazardous areas. Made from strong, weather-resistant plastic material, it is lightweight, reusable, and easy to install. Ideal for construction sites, road works, and crowd control applications.', '1761564189_blob.png', 'barricading-net', '1', '1', '2025-10-27 16:53:09', '2025-10-27 16:53:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb1_admin`
--
ALTER TABLE `tb1_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb1_blog`
--
ALTER TABLE `tb1_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb1_catalogue`
--
ALTER TABLE `tb1_catalogue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb1_category`
--
ALTER TABLE `tb1_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb1_contact`
--
ALTER TABLE `tb1_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb1_enquiry`
--
ALTER TABLE `tb1_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb1_gallery`
--
ALTER TABLE `tb1_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb1_latest_news`
--
ALTER TABLE `tb1_latest_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb1_mainproduct`
--
ALTER TABLE `tb1_mainproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb1_subproduct`
--
ALTER TABLE `tb1_subproduct`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb1_admin`
--
ALTER TABLE `tb1_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb1_blog`
--
ALTER TABLE `tb1_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb1_catalogue`
--
ALTER TABLE `tb1_catalogue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb1_category`
--
ALTER TABLE `tb1_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb1_contact`
--
ALTER TABLE `tb1_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb1_enquiry`
--
ALTER TABLE `tb1_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb1_gallery`
--
ALTER TABLE `tb1_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tb1_latest_news`
--
ALTER TABLE `tb1_latest_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb1_mainproduct`
--
ALTER TABLE `tb1_mainproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb1_subproduct`
--
ALTER TABLE `tb1_subproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

