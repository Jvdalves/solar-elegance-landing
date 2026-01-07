import { Zap } from "lucide-react";

const Footer = () => {
  return (
    <footer className="bg-background border-t border-border py-12">
      <div className="container mx-auto px-4">
        <div className="flex flex-col items-center text-center">
          {/* Logo */}
          <div className="flex items-center gap-2 mb-6">
            <div className="w-10 h-10 rounded-full bg-accent flex items-center justify-center">
              <Zap className="w-5 h-5 text-accent-foreground" />
            </div>
            <span className="font-display font-bold text-xl">
              <span className="text-foreground">Solux</span>
              <span className="text-accent">Energy</span>
            </span>
          </div>

          {/* Copyright */}
          <p className="text-foreground/50 text-sm mb-2">
            © 2026 Solux Energy. Todos os direitos reservados.
          </p>
          <p className="text-foreground/40 text-xs mb-4">
            CNPJ 00.000.000/0001-00
          </p>
          <p className="text-foreground/30 text-xs">
            Desenvolvido para fins demonstrativos.
          </p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
