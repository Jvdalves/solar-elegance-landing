import { useState, useEffect } from "react";
import { Zap, Menu, X } from "lucide-react";
import { motion, AnimatePresence } from "framer-motion";

const Header = () => {
  const [isScrolled, setIsScrolled] = useState(false);
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 50);
    };
    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  const scrollToSection = (id: string) => {
    const element = document.getElementById(id);
    if (element) {
      element.scrollIntoView({ behavior: "smooth" });
    }
    setIsMobileMenuOpen(false);
  };

  return (
    <header
      className={`fixed top-0 left-0 right-0 z-50 transition-all duration-300 ${
        isScrolled ? "glass-header py-3" : "bg-transparent py-5"
      }`}
    >
      <div className="container mx-auto flex items-center justify-between">
        {/* Logo */}
        <motion.div
          initial={{ opacity: 0, x: -20 }}
          animate={{ opacity: 1, x: 0 }}
          className="flex items-center gap-2"
        >
          <div className="w-10 h-10 rounded-full bg-accent flex items-center justify-center">
            <Zap className="w-5 h-5 text-accent-foreground" />
          </div>
          <span className="font-display font-bold text-xl">
            <span className="text-foreground">Solux</span>
            <span className="text-accent">Energy</span>
          </span>
        </motion.div>

        {/* Desktop Navigation */}
        <nav className="hidden md:flex items-center gap-8">
          <button
            onClick={() => scrollToSection("economia")}
            className="text-foreground/70 hover:text-accent transition-colors text-sm font-medium"
          >
            Economia
          </button>
          <button
            onClick={() => scrollToSection("tecnologia")}
            className="text-foreground/70 hover:text-accent transition-colors text-sm font-medium"
          >
            Tecnologia
          </button>
          <button
            onClick={() => scrollToSection("depoimentos")}
            className="text-foreground/70 hover:text-accent transition-colors text-sm font-medium"
          >
            Depoimentos
          </button>
        </nav>

        {/* CTA Button */}
        <motion.button
          initial={{ opacity: 0, x: 20 }}
          animate={{ opacity: 1, x: 0 }}
          onClick={() => scrollToSection("contato")}
          className="hidden md:block btn-gold text-sm py-3 px-6"
        >
          Simular Economia
        </motion.button>

        {/* Mobile Menu Button */}
        <button
          className="md:hidden text-foreground p-2"
          onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
        >
          {isMobileMenuOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
        </button>
      </div>

      {/* Mobile Menu */}
      <AnimatePresence>
        {isMobileMenuOpen && (
          <motion.div
            initial={{ opacity: 0, height: 0 }}
            animate={{ opacity: 1, height: "auto" }}
            exit={{ opacity: 0, height: 0 }}
            className="md:hidden glass-header border-t border-border/50"
          >
            <nav className="container mx-auto py-6 flex flex-col gap-4">
              <button
                onClick={() => scrollToSection("economia")}
                className="text-foreground/70 hover:text-accent transition-colors text-left py-2"
              >
                Economia
              </button>
              <button
                onClick={() => scrollToSection("tecnologia")}
                className="text-foreground/70 hover:text-accent transition-colors text-left py-2"
              >
                Tecnologia
              </button>
              <button
                onClick={() => scrollToSection("depoimentos")}
                className="text-foreground/70 hover:text-accent transition-colors text-left py-2"
              >
                Depoimentos
              </button>
              <button
                onClick={() => scrollToSection("contato")}
                className="btn-gold text-sm py-3 px-6 w-full mt-2"
              >
                Simular Economia
              </button>
            </nav>
          </motion.div>
        )}
      </AnimatePresence>
    </header>
  );
};

export default Header;
