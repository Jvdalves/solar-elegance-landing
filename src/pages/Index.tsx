import Header from "@/components/Header";
import HeroSection from "@/components/HeroSection";
import PainSection from "@/components/PainSection";
import OpportunityCostSection from "@/components/OpportunityCostSection";
import TestimonialsSection from "@/components/TestimonialsSection";
import TechnologySection from "@/components/TechnologySection";
import ConciergeSection from "@/components/ConciergeSection";
import ContactSection from "@/components/ContactSection";
import Footer from "@/components/Footer";

const Index = () => {
  return (
    <div className="min-h-screen">
      <Header />
      <HeroSection />
      <PainSection />
      <OpportunityCostSection />
      <TestimonialsSection />
      <TechnologySection />
      <ConciergeSection />
      <ContactSection />
      <Footer />
    </div>
  );
};

export default Index;
